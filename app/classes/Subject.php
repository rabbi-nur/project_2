<?php


namespace App\classes;
class Subject
{
    public function getAllSubject()
    {
        return[
            0=>[
                'id'=>1,
                'name'=>'Bangla',
            ],
            1=>[
                'id'=>2,
                'name'=>'English',
            ],
            2=>[
                'id'=>3,
                'name'=>'Math',
            ],
            3=>[
                'id'=>4,
                'name'=>'G.K.',
            ],
        ];
    }
}