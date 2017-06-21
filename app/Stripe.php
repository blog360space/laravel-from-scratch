<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

/**
 * Description of Stripe
 *
 * @author hungtran
 */
class Stripe {
    
    private $key = null;
    
    public function __construct($key) 
    {
        $this->key = $key;
    }
}
