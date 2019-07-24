<?php

namespace App\Service;

interface OfferInterface
{
    /**
     * @return array
     */    
    public function getOffers();
    
    /**
     * @param array
     * @return array
     */    
    public function getFormattedOffers($parameters);    
}