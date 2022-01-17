<?php

class Favorite_model extends CI_Model
{


    public function addfav()
    {
        $data = [
            'users_id' => $this->input->post('users_id'),
            'hero_id' => $this->input->post('hero_id'),
            'nama' => $this->input->post('nama'),
            'nama2' => $this->input->post('nama2'),
            'kategori' => $this->input->post('kategori'),
            'asal' => $this->input->post('asal'),
            'lahir' => $this->input->post('lahir'),
            'usia' => $this->input->post('usia'),
            'gugur' => $this->input->post('gugur'),
            'lokasimakam' => $this->input->post('lokasimakam'),
            'history' => $this->input->post('history'),
            'img' => $this->input->post('img'),
            'is_favorite' => 1
        ];
        $this->db->insert('favorite', $data);
    }

    public function unfav()
    {
        $id = $this->input->post('users_id');
        $data = [
            'users_id' => $this->input->post('users_id'),
            'hero_id' => $this->input->post('hero_id'),
            'nama' => $this->input->post('nama'),
            'nama2' => $this->input->post('nama2'),
            'kategori' => $this->input->post('kategori'),
            'asal' => $this->input->post('asal'),
            'lahir' => $this->input->post('lahir'),
            'usia' => $this->input->post('usia'),
            'gugur' => $this->input->post('gugur'),
            'lokasimakam' => $this->input->post('lokasimakam'),
            'history' => $this->input->post('history'),
            'img' => $this->input->post('img'),
            'is_favorite' => 0
        ];
        $this->db->where('users_id', $id);
        $this->db->update('favorite', $data);

        // $this->db->where('users_id', $id)
    }
    public function updatefav()
    {
        $id = $this->input->post('users_id');
        $data = [
            'users_id' => $this->input->post('users_id'),
            'hero_id' => $this->input->post('hero_id'),
            'nama' => $this->input->post('nama'),
            'nama2' => $this->input->post('nama2'),
            'kategori' => $this->input->post('kategori'),
            'asal' => $this->input->post('asal'),
            'lahir' => $this->input->post('lahir'),
            'usia' => $this->input->post('usia'),
            'gugur' => $this->input->post('gugur'),
            'lokasimakam' => $this->input->post('lokasimakam'),
            'history' => $this->input->post('history'),
            'img' => $this->input->post('img'),
            'is_favorite' => 1
        ];
        $this->db->where('users_id', $id);
        $this->db->update('favorite', $data);

        // $this->db->where('users_id', $id)
    }

    public function getFavhero()
    {
        $usersid =  $this->session->userdata('username_id');
        return $this->db->get_where('favorite', ['users_id' => $usersid])->result_array();
    }
}
