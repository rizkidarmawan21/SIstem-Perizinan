<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Kampus1_model extends CI_Model{

        public function getAllData(){
            // $this->db->where('status',0); 
            // $this->db->where($array); 
            $this->db->order_by("id", "desc");
            return $this->db->get('santri_kampus_1');

        }
        public function getAllDataMasaIzin(){
            $this->db->where('status',1); 
            $this->db->order_by("id", "desc");
            return $this->db->get('santri_kampus_1');

        }
        public function getAllDataLog(){
            $this->db->where('status',2); 
            $this->db->order_by("id", "desc");
            return $this->db->get('santri_kampus_1');

        }

}