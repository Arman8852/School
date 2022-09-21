<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Madrasha extends Model
{
    public function information()
    {
        return $this->hasOne(Information::class);
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
    protected $attributes = [
        'founder' => '.........',
        'foundationyear' =>'.........',
        'founder' => '.........',
        'foundationyear' => '.........',
        'address' => '.........',
        'muhtamimideology' => '.........',
        'muhtamimaddress' => '.........',
        'muhtamimnid' => '.........',
        'muhtamimphone' => '.........',
        'highestclass' => '.........',
        'teachernumber' => '.........',
        'studentnumber' => '.........',
        'category' => '.........',
        'type' => '.........',
    ];
}
