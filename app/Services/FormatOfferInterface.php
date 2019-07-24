<?php

namespace App\Service;

interface FormatOfferInterface
{
    /**
     * @param array
     * @return array
     */     
    public static function formatOfferList($offers);
    
    /**
     * @param array
     * @param array
     * @return array
     */     
    public static function filterOfferList($offers, $parameters);    
}