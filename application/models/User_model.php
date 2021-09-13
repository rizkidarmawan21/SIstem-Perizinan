<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class User_model extends CI_Model{

        public function getCountKampus1(){
            $query = $this->db->get('santri_kampus_1');

            if($query->num_rows()>0)
            {
                return $query->num_rows();
            }else{

            return 0;
            }
                }

        public function getCountKampus2(){
            $query = $this->db->get('santri_kampus_2');

            if($query->num_rows()>0)
            {
                return $query->num_rows();
            }else{

            return 0;
            }
                }


        public function getCountKampus3(){
            $query = $this->db->get('santri_kampus_3');

            if($query->num_rows()>0)
            {
                return $query->num_rows();
            }else{

            return 0;
            }
                }
        public function getCountKampus4(){
            $query = $this->db->get('santri_kampus_4');

            if($query->num_rows()>0)
            {
                return $query->num_rows();
            }else{

            return 0;
            }
                }




                public function getCountKampus1Izin(){
                    $query = $this->db->where('status',1);
                    $query = $this->db->get('santri_kampus_1');
        
                    if($query->num_rows()>0)
                    {
                        return $query->num_rows();
                    }else{
        
                    return 0;
                    }
                        }
                public function getCountKampus2Izin(){
                    $query = $this->db->where('status',1);
                    $query = $this->db->get('santri_kampus_2');
        
                    if($query->num_rows()>0)
                    {
                        return $query->num_rows();
                    }else{
        
                    return 0;
                    }
                        }
                public function getCountKampus3Izin(){
                    $query = $this->db->where('status',1);
                    $query = $this->db->get('santri_kampus_3');
        
                    if($query->num_rows()>0)
                    {
                        return $query->num_rows();
                    }else{
        
                    return 0;
                    }
                        }
                public function getCountKampus4Izin(){
                    $query = $this->db->where('status',1);
                    $query = $this->db->get('santri_kampus_4');
        
                    if($query->num_rows()>0)
                    {
                        return $query->num_rows();
                    }else{
        
                    return 0;
                    }
                        }



                public function getCountKampus1Back(){
                    $query = $this->db->where('status',2);
                    $query = $this->db->get('santri_kampus_1');
        
                    if($query->num_rows()>0)
                    {
                        return $query->num_rows();
                    }else{
        
                    return 0;
                    }
                        }
                        public function getCountKampus2Back(){
                            $query = $this->db->where('status',2);
                    $query = $this->db->get('santri_kampus_2');
                    
                    if($query->num_rows()>0)
                    {
                        return $query->num_rows();
                    }else{
        
                        return 0;
                    }
                }
                public function getCountKampus3Back(){
                    $query = $this->db->where('status',2);
                    $query = $this->db->get('santri_kampus_3');
        
                    if($query->num_rows()>0)
                    {
                        return $query->num_rows();
                    }else{
        
                    return 0;
                }
                        }
                        

                        public function getCountKampus4Back(){
                            $query = $this->db->where('status',2);
                            $query = $this->db->get('santri_kampus_4');
                
                            if($query->num_rows()>0)
                            {
                                return $query->num_rows();
                            }else{
                
                            return 0;
                            }
                                }
    }