<?php

use GuzzleHttp\Client;

class Barang_m extends CI_model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest-server/api/',
        ]);
    }

    public function getDataBarang()
    {
        $response = $this->_client->request('GET', 'barang', [
            'query' => [
                'barang-key' => 'barang77'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function getBarangbyId($id)
    {
        $response = $this->_client->request('GET', 'barang', [
            'query' => [
                'barang-key' => 'barang77',
                'item_id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }

    public function hapusDataBarang($id)
    {
        $response = $this->_client->request('DELETE', 'barang', [
            'form_params' => [
                'item_id' => $id,
                'barang-key' => 'barang77'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function tambahBarang()
    {
        $data = [
            "kode_barang" => $this->input->post('kode_barang', true),
            "name" => $this->input->post('name', true),
            "barang-key" => 'barang77'
        ];

        $response = $this->_client->request('POST', 'barang', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function editBarang()
    {
        $data = [
            "kode_barang" => $this->input->post('kode_barang', true),
            "name" => $this->input->post('name', true),
            "item_id" => $this->input->post('id', true),
            "barang-key" => 'barang77'
        ];

        $response = $this->_client->request('PUT', 'barang', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}
