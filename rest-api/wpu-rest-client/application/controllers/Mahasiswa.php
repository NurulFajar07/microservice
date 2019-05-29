<?php

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        if( $this->input->post('keyword') ) {
            $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
        }
        
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }
     public function apawe()
    {
        $data['judul'] = 'Daftar KKN';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllkkn();
        if( $this->input->post('keyword')) {
            $keyword = $this->input->post('keyword');
            $data['mahasiswa'] = $this->Mahasiswa_model->cariDatakkn($keyword);
        }
        
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index2', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_hp', 'NRP', 'required');
        $this->form_validation->set_rules('waktu', 'Email', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mahasiswa');
        }
    }

    public function kkntambah()
    {
        $data['judul'] = 'Form Tambah Data';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_hp', 'NRP', 'required');
        $this->form_validation->set_rules('tanggal', 'Email', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah2');
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->tambahDatakkn();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mahasiswa/apawe');
        }
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_hp', 'NRP', 'required');
        $this->form_validation->set_rules('jenis', 'Email', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->ubahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('mahasiswa');
        }
    }
public function kknhapus($id)
    {
        $this->Mahasiswa_model->hapusDatakkn($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa/apawe');
    }

    public function kkndetail($id)
    {
        $data['judul'] = 'Detail Data KKN';
        $data['mahasiswa'] = $this->Mahasiswa_model->getkknById($id);


        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail2', $data);
        $this->load->view('templates/footer');
    }

    public function kknubah($id)
    {
        $data['judul'] = 'Form Ubah Data KKN';
        $data['mahasiswa'] = $this->Mahasiswa_model->getkknById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_hp', 'NRP', 'required');
        $this->form_validation->set_rules('tanggal', 'Email', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/ubah2', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->ubahDatakkn($id);
            // $this->session->set_flashdata('flash', 'Diubah');
            redirect('mahasiswa/apawe');
        }
    }
}
