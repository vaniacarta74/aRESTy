<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of calculator
 *
 * @author vania
 */
namespace vaniacarta74\aRESTy;

class Calculator
{
    /**
     * @assert (1, 1) == 2
     * @assert (1, 2) == 3
     * @assert (2, 2) == 4
     */    
    
    public function add($a, $b) {
        return $a + $b;
    }
    
    public function sub($a, $b) {
        return $a - $b;
    }
}
