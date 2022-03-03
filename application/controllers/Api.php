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

    // get all user
    public function users_get()
    {
        $this->load->model('User_model');
        return $this->User_model->get_all();
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
        $id_homeproduction = $this->post('id_homeproduction');
        $judul = $this->post('judul');
        $producer = $this->post('producer');
        $penulis_naskah = $this->post('penulis_naskah');
        $musik = $this->post('musik');
        $cimatografi = $this->post('cimatografi');
        $editor = $this->post('editor');
        $durasi = $this->post('durasi');
        $poster = $_FILES['poster'];
        $bahasa = $this->post('bahasa');
        $negara = $this->post('negara');
        $rating = $this->post('rating');
        $tahun_rilis = $this->post('tahun_rilis');


        if ($poster && $id_homeproduction  && $judul && $producer && $penulis_naskah && $musik && $cimatografi && $editor && $durasi && $bahasa && $negara && $rating && $tahun_rilis) {

            // upload poster
            $temp = "assets/img/";
            if (!file_exists($temp))
                mkdir($temp);

            $nama_file       = $_POST['poster'];
            $fileupload      = $_FILES['poster']['tmp_name'];
            $ImageName       = $_FILES['poster']['name'];
            $ImageType       = $_FILES['poster']['type'];

            if (!empty($fileupload)) {
                $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
                $ImageExt       = str_replace('.', '', $ImageExt); // Extension
                $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
                $NewImageName   = str_replace(' ', '', $ImageName) . '.' . $ImageExt;

                move_uploaded_file($_FILES["poster"]["tmp_name"], $temp . $NewImageName); // Menyimpan file

                // echo "Data Berhasil Diupload";
                $poster = $NewImageName;
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'data film gagal ditambahkan, foto gagal di upload'
                ], 400);
            }

            $film = [
                'id_homeproduction' => $id_homeproduction,
                'judul' => $judul,
                'producer' => $producer,
                'penulis_naskah' => $penulis_naskah,
                'musik' => $musik,
                'cimatografi' => $cimatografi,
                'editor' => $editor,
                'durasi' => $durasi,
                'poster' => $poster,
                'bahasa' => $bahasa,
                'negara' => $negara,
                'rating' => $rating,
                'tahun_rilis' => $tahun_rilis
            ];



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
        // echo "put";
        // var_dump($this->put('WMM-KEY'));
        // exit;
        $id_film = $this->put('id_film');
        $id_homeproduction = $this->put('id_homeproduction');
        $judul = $this->put('judul');
        $producer = $this->put('producer');
        $penulis_naskah = $this->put('penulis_naskah');
        $musik = $this->put('musik');
        $cimatografi = $this->put('cimatografi');
        $editor = $this->put('editor');
        $durasi = $this->put('durasi');
        // $poster = $_FILES['poster'];
        $bahasa = $this->put('bahasa');
        $negara = $this->put('negara');
        $rating = $this->put('rating');
        $tahun_rilis = $this->put('tahun_rilis');

        // exit;

        if ($id_homeproduction  && $judul && $producer && $penulis_naskah && $musik && $cimatografi && $editor && $durasi && $bahasa && $negara && $rating && $tahun_rilis) {

            // upload poster
            // $temp = "assets/img/";
            // if (!file_exists($temp))
            //     mkdir($temp);

            // $nama_file       = $_POST['poster'];
            // $fileupload      = $_FILES['poster']['tmp_name'];
            // $ImageName       = $_FILES['poster']['name'];
            // $ImageType       = $_FILES['poster']['type'];

            // if (!empty($fileupload)) {
            //     $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
            //     $ImageExt       = str_replace('.', '', $ImageExt); // Extension
            //     $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            //     $NewImageName   = str_replace(' ', '', $ImageName) . '.' . $ImageExt;

            //     move_uploaded_file($_FILES["poster"]["tmp_name"], $temp . $NewImageName); // Menyimpan file

            //     $poster = $NewImageName;
            // } else {
            //     $NewImageName = $this->put('posterbc');
            //     $poster = $NewImageName;
            // }

            $film = [
                'id_homeproduction' => $id_homeproduction,
                'judul' => $judul,
                'producer' => $producer,
                'penulis_naskah' => $penulis_naskah,
                'musik' => $musik,
                'cimatografi' => $cimatografi,
                'editor' => $editor,
                'durasi' => $durasi,
                // 'poster' => $poster,
                'bahasa' => $bahasa,
                'negara' => $negara,
                'rating' => $rating,
                'tahun_rilis' => $tahun_rilis
            ];

            $this->Film_model->update($id_film, $film);
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

    // rest homeproduction

    public function homeproduction_get()
    {
        $id = $this->get('id');
        if ($id) {
            // ambil data berdasarkan id
            $homeproduction = $this->Homeproduction_model->get_by_id($id);
            // jika ada data
            if ($homeproduction) {
                $this->response([
                    'status' => true,
                    'data' => $homeproduction
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
            $homeproduction = $this->Homeproduction_model->get_all();
            // jika ada data
            if ($homeproduction) {
                $total_homeproduction = count($homeproduction);
                // tampilkan data
                $this->response([
                    'status' => true,
                    'data' => $homeproduction,
                    'total_homeproduction' => $total_homeproduction
                ], 200);
            } else {
                // jika tidak ada data
                $this->response([
                    'status' => false,
                    'message' => 'data homeproduction tidak ditemukan'
                ], 404);
            }
        }
    }

    public function homeproduction_post()
    {
        $nama = $this->post('nama');
        $pemilik = $this->post('pemilik');
        $tahun_berdiri = $this->post('tahun_berdiri');
        $logo = $_FILES['logo'];
        $website = $this->post('website');
        $email = $this->post('email');
        $no_tlp = $this->post('no_tlp');
        $alamat = $this->post('alamat');
        $facebook = $this->post('facebook');
        $instagram = $this->post('instagram');
        $twitter = $this->post('twitter');



        if ($nama && $pemilik && $tahun_berdiri && $logo && $website && $email && $no_tlp && $alamat && $facebook && $instagram && $twitter) {

            // upload logo
            $temp = "assets/img/logo/";
            if (!file_exists($temp))
                mkdir($temp);

            // $nama_file       = $_POST['logo'];
            $fileupload      = $_FILES['logo']['tmp_name'];
            $ImageName       = $_FILES['logo']['name'];
            $ImageType       = $_FILES['logo']['type'];

            if (!empty($fileupload)) {
                $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
                $ImageExt       = str_replace('.', '', $ImageExt); // Extension
                $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
                $NewImageName   = str_replace(' ', '', $ImageName) . '.' . $ImageExt;

                move_uploaded_file($_FILES["logo"]["tmp_name"], $temp . $NewImageName); // Menyimpan file

                // echo "Data Berhasil Diupload";
                $logo = $NewImageName;
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'data film gagal ditambahkan, logo gagal di upload'
                ], 400);
            }

            $homeproduction = [
                'nama' => $nama,
                'pemilik' => $pemilik,
                'tahun_berdiri' => $tahun_berdiri,
                'logo' => $logo,
                'website' => $website,
                'email' => $email,
                'no_tlp' => $no_tlp,
                'alamat' => $alamat,
                'facebook' => $facebook,
                'instagram' => $instagram,
                'twitter' => $twitter
            ];

            $this->Homeproduction_model->insert($homeproduction);
            $this->response([
                'status' => true,
                'message' => 'data homeproduction berhasil ditambahkan'
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data homeproduction gagal ditambahkan'
            ], 400);
        }
    }

    public function homeproduction_put()
    {
        $id_homeproduction = $this->put('id_homeproduction');
        $nama = $this->put('nama');
        $pemilik = $this->put('pemilik');
        $tahun_berdiri = $this->put('tahun_berdiri');
        // $logo = $_FILES['logo'];
        $website = $this->put('website');
        $email = $this->put('email');
        $no_tlp = $this->put('no_tlp');
        $alamat = $this->put('alamat');
        $facebook = $this->put('facebook');
        $instagram = $this->put('instagram');
        $twitter = $this->put('twitter');





        if ($id_homeproduction && $nama && $pemilik && $tahun_berdiri  && $website && $email && $no_tlp && $alamat && $facebook && $instagram && $twitter) {

            // upload logo
            // $temp = "assets/img/logo/";
            // if (!file_exists($temp))
            //     mkdir($temp);

            // $nama_file       = $_POST['logo'];
            // $fileupload      = $_FILES['logo']['tmp_name'];
            // $ImageName       = $_FILES['logo']['name'];
            // $ImageType       = $_FILES['logo']['type'];

            // if (!empty($fileupload)) {
            //     $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
            //     $ImageExt       = str_replace('.', '', $ImageExt); // Extension
            //     $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            //     $NewImageName   = str_replace(' ', '', $ImageName) . '.' . $ImageExt;

            //     move_uploaded_file($_FILES["logo"]["tmp_name"], $temp . $NewImageName); // Menyimpan file

            //     $logo = $NewImageName;
            // } else {
            //     $NewImageName = $this->input->put('logobc');
            // }

            $homeproduction = [
                'id_homeproduction' => $id_homeproduction,
                'nama' => $nama,
                'pemilik' => $pemilik,
                'tahun_berdiri' => $tahun_berdiri,
                // 'logo' => $logo,
                'website' => $website,
                'email' => $email,
                'no_tlp' => $no_tlp,
                'alamat' => $alamat,
                'facebook' => $facebook,
                'instagram' => $instagram,
                'twitter' => $twitter,
            ];

            // var_dump($homeproduction);
            // exit;

            $this->Homeproduction_model->update($id_homeproduction, $homeproduction);
            $this->response([
                'status' => true,
                'message' => 'data homeproduction berhasil diubah'
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data film gagal diubah'
            ], 400);
        }
    }

    public function homeproduction_delete()
    {
        $id = $this->delete('id');

        if ($id) {
            $this->Homeproduction_model->delete($id);
            $this->response([
                'status' => true,
                'message' => 'data homeproduction berhasil dihapus'
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data homeproduction gagal dihapus'
            ], 400);
        }
    }
}
