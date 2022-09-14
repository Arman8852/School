<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
     public function madrasha()
    {
        return $this->belongsTo(Madrasha::class);
    }

    protected $attributes = [
        'accidentinfo' => '.........',
        'madrashaideology' => '.........',
        'externalinfluence' => '.........',
        'caseinfo' => '.........',
        'bankinfo' => '.........',
        'donnerinfo' => '.........',
        'remarks' => '.........',
    ];
}
