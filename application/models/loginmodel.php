<?php
/**
 *
 */
class loginmodel extends CI_model
{

  public function isvalidate($username,$password)
  {
    // code...
    $q=$this->db->where(['username'=>$username,'password'=>$password])
                ->get('users');

                if($q->num_rows())
                {
                  return $q->row()->id;
                }
                else {
                  return FALSE;
                }
  }
}

  ?>
