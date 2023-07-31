<?php


namespace App\classes;


class Registration
{
    public $data= [];
    public function __construct($post)
    {
        $this->data =[
            'name'     => $post['name'],
            'email'    => $post['email'],
            'mobile'   => $post['mobile'],
            'subjects' => $post['subject'],
        ];
    }
    public function getAllData()
    {
      /*  echo '<pre>';
        print_r($this->data);
        echo '</pre>';*/
        return $this->data;
    }
}