<?php

namespace App\Controllers;

class BasketController extends CoreController
{
    public function show()
    {
        $this->show('basket');
    }
}