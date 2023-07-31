<?php


namespace App\classes;


class Series
{
    public $starting_number;
    public $ending_number;
    public $result;
    public $choice;

    public function __construct($post)
    {
        $this->starting_number = $post['starting_number'];
        $this->ending_number   = $post['ending_number'];
        if(isset($post['choice']))
        {
            $this->choice          = $post['choice'];
        }
    }
    public function index()
    {
//        return $this->starting_number.''.$this->ending_number;

        for ($this->starting_number; $this->starting_number<= $this->ending_number;$this->starting_number++)
        {
            $this->result .= $this->starting_number.'';
        }
        return $this->result;
    }

    public function oddEven()
    {
        /*echo '<pre>';
        print_r($this->starting_number);
        print_r($this->ending_number);
        print_r($this->choice);
        echo '</pre>';*/
        if ($this->choice == '1')
        {
            for ($this->starting_number; $this->starting_number<= $this->ending_number;$this->starting_number++)
            {
                if ($this->starting_number % 2 != 0 )
                {
                    $this->result .=$this->starting_number.' ';
                }
            }
            return $this->result;
        }
        elseif ($this->choice == '2')
        {
            for ($this->starting_number; $this->starting_number<= $this->ending_number;$this->starting_number++)
            {
                if ($this->starting_number % 2 == 0 )
                {
                    $this->result .=$this->starting_number.' ';
                }
            }
            return $this->result;
        }
    }

    public function seriesSum()
    {
        for ($this->starting_number;$this->starting_number <= $this->ending_number;$this->starting_number++)
        {
            $this->result += $this->starting_number;
        }
        return $this->result;
    }
}