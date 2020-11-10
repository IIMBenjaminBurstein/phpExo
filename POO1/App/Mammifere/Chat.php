<?php

namespace App\Mammifere;
use App\Mammifere\Mammifere;
class Chat extends Mammifere{
    /**
     * Undocumented variable
     *
     * @var string
     */
     protected $cri = "miaou";
     public function class() {
         return __CLASS__;
     }
    }
    $chat = new Chat("med","gris");
    echo $chat->class();

