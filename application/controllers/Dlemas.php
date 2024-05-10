<?php
class Dlemas extends CI_Controller
{
    public function index()
    {
        $this->load->view('view_form_dlemas');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[3]', [
            'required' => 'Nama harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);

        $this->form_validation->set_rules('NIS', 'NIS', 'required|min_length[3]', [
            'required' => 'NIS harus diisi',
            'min_length' => 'NIS terlalu pendek'
        ]);

        $this->form_validation->set_rules('Kelas', 'Kelas', 'required|min_length[3]', [
            'required' => 'Kelas harus diisi',
            'min_length' => 'Kelas terlalu pendek'
        ]);

        $this->form_validation->set_rules('Tanggal_Lahir', 'Tanggal Lahir', 'required', [
            'required' => 'Tanggal Lahir harus diisi'
        ]);

        $this->form_validation->set_rules('Tempat_Lahir', 'Tempat Lahir', 'required|min_length[3]', [
            'required' => 'Tempat Lahir harus diisi',
            'min_length' => 'Tempat Lahir terlalu pendek'
        ]);

        $this->form_validation->set_rules('Alamat', 'Alamat', 'required|min_length[3]', [
            'required' => 'Alamat harus diisi',
            'min_length' => 'Alamat terlalu pendek'
        ]);

        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin harus dipilih'
        ]);

        $this->form_validation->set_rules('Agama', 'Agama', 'required', [
            'required' => 'Agama harus diisi'
        ]);

        // Jalankan validasi
        if ($this->form_validation->run() != true) {
            $this->load->view('view_form_dlemas');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'NIS' => $this->input->post('NIS'),
                'Kelas' => $this->input->post('Kelas'),
                'Tanggal_Lahir' => $this->input->post('Tanggal_Lahir'),
                'Tempat_Lahir' => $this->input->post('Tempat_Lahir'),
                'Alamat' => $this->input->post('Alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'Agama' => $this->input->post('Agama'),
            ];

            $this->load->model('Model_dlemas');
            $this->Model_dlemas->simpan_data($data);

            $this->load->view('view_data_dlemas', $data);
        }
    }
}
?>
