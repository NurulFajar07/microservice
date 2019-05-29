<?php 
use GuzzleHttp\Client;

class Mahasiswa_model extends CI_model {
    public function getAllMahasiswa()
    {
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/rest-api/wpu-rest-server/api/mahasiswa', [
            'auth' => ['admin', '1234'],
            'query' => [
                'wpu-key' => 'karawla'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }
    public function getAllkkn()
    {
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/rest-api/wpu-rest-server2/api/mahasiswa'
        );

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }
    public function cariDatakkn($id)
    {
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/rest-api/wpu-rest-server2/api/mahasiswa',[
            'query' => [
                'id' => $id
            ]
        ]
        );

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }
    public function getMahasiswaById($id)
    {
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/rest-api/wpu-rest-server/api/mahasiswa', [
            'auth' => ['admin', '1234'],
            'query' => [
                'wpu-key' => 'karawla',
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

        public function getKknById($id)
    {
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/rest-api/wpu-rest-server2/api/mahasiswa', [
            'query' => [
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "no_hp" => $this->input->post('no_hp', true),
            "jenis" => $this->input->post('jenis', true),
            "lokasi" => $this->input->post('lokasi', true),
            "waktu" => $this->input->post('waktu', true),
            "status" => $this->input->post('status', true)
        ];

        $this->db->insert('info', $data);
    }

    public function tambahDatakkn()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "no_hp" => $this->input->post('no_hp', true),
            "tanggal" => $this->input->post('tanggal', true)
        ];

        $client = new Client();

        $response = $client->request('POST', 'http://localhost/rest-api/wpu-rest-server2/api/mahasiswa',[
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function hapusDataMahasiswa($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('info', ['id' => $id]);
    }

    public function hapusDatakkn($id)
    {
        $client = new Client();

        $response = $client->request('DELETE', 'http://localhost/rest-api/wpu-rest-server2/api/mahasiswa',[
            'form_params' => [
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "no_hp" => $this->input->post('no_hp', true),
            "jenis" => $this->input->post('jenis', true),
            "lokasi" => $this->input->post('lokasi', true),
            "waktu" => $this->input->post('waktu', true),
            "status" => $this->input->post('status', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('info', $data);
    }

    public function ubahDatakkn($id)
    {
        $data = [
           "id" => $this->input->post('id', true),
            "nama" => $this->input->post('nama', true),
            "no_hp" => $this->input->post('no_hp', true),
            "tanggal" => $this->input->post('tanggal', true)
        ];

        $client = new Client();

        $response = $client->request('PUT', 'http://localhost/rest-api/wpu-rest-server2/api/mahasiswa',[
                'form_params' => $data
        ]);

        var_dump($data);
        // $result = json_decode($response->getBody()->getContents(), true);

        // return $result['data'][0];   
    }

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('no_hp', $keyword);
        $this->db->or_like('jenis', $keyword);
        $this->db->or_like('lokasi', $keyword);
        $this->db->or_like('waktu', $keyword);
        $this->db->or_like('status', $keyword);
        return $this->db->get('info')->result_array();
    }
}