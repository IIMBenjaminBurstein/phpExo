<?php

namespace App\Mammifere;
use App\Mammifere\Mammifere;
class Chien extends Mammifere{
    /**
     * Undocumented variable
     *
     * @var string
     */
     protected $cri = "ouaf";
     public function class() {
         return __CLASS__;
     }
    }
    $chien = new Chien("med","gris");
    echo $chien->class();