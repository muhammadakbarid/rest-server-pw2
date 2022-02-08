<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Film_model');
        $this->load->model('Homeproduction_model');
    }

    public function film_get()
    {
        // parameter id
        $id = $this->get('id');

        // jika ada $id
        if ($id) {
            // ambil data berdasarkan id
            $film = $this->Film_model->get_by_id($id);
            // jika ada data
            if ($film) {
                // tampilkan data
                $this->response([
                    'status' => true,
                    'data' => $film
                ], 200);
            } else {
                // jika tidak ada data
                $this->response([
                    'status' => false,
                    'message' => 'Id ' . $id . ' tidak ditemukan'
                ], 404);
            }
        } else {
            // jika tidak ada $id
            // ambil semua data
            $film = $this->Film_model->get_all();
            // jika ada data
            if ($film) {
                $total_film = count($film);
                // tampilkan data
                $this->response([
                    'status' => true,
                    'data' => $film,
                    'total_film' => $total_film
                ], 200);
            } else {
                // jika tidak ada data
                $this->response([
                    'status' => false,
                    'message' => 'data film tidak ditemukan'
                ], 404);
            }
        }
    }

    public function film_post()
    {
        $judul = $this->post('judul');
        $tahun_rilis = $this->post('tahun_rilis');
        $genre = $this->post('genre');
        $director = $this->post('director');
        $poster = $this->post('poster');
        $deskripsi = $this->post('deskripsi');

        $film = [
            'judul' => $judul,
            'tahun_rilis' => $tahun_rilis,
            'genre' => $genre,
            'poster' => $poster,
            'deskripsi' => $deskripsi,
            'director' => $director
        ];

        if ($judul && $tahun_rilis && $genre && $director && $poster && $deskripsi) {
            $this->Film_model->insert($film);
            $this->response([
                'status' => true,
                'message' => 'data film berhasil ditambahkan'
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data film gagal ditambahkan'
            ], 400);
        }
    }

    public function film_put()
    {
        $id = $this->put('id');
        $judul = $this->put('judul');
        $tahun_rilis = $this->put('tahun_rilis');
        $genre = $this->put('genre');
        $director = $this->put('director');
        $poster = $this->put('poster');
        $deskripsi = $this->put('deskripsi');

        $film = [
            'judul' => $judul,
            'tahun_rilis' => $tahun_rilis,
            'genre' => $genre,
            'poster' => $poster,
            'deskripsi' => $deskripsi,
            'director' => $director
        ];

        if ($id && $judul && $tahun_rilis && $genre && $director && $poster && $deskripsi) {
            $this->Film_model->update($id, $film);
            $this->response([
                'status' => true,
                'message' => 'data film berhasil diubah'
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data film gagal diubah'
            ], 400);
        }
    }

    public function film_delete()
    {
        $id = $this->delete('id');

        if ($id) {
            $this->Film_model->delete($id);
            $this->response([
                'status' => true,
                'message' => 'data film berhasil dihapus'
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data film gagal dihapus'
            ], 400);
        }
    }
}
