<?php

namespace App\Service;

use App\Offer;
use Unirest\Request;

class GoldmanFormatOfferListService implements FormatOfferInterface
{
    /**
     * @param array $offers
     * @return array $offerList
     */    
    public static function formatOfferList($offers)
    {
        $offerList = [];
        
		foreach ($offers as $offer) {
            $offerModel = new Offer();
            $offerModel->setId($offer->id);
            $offerModel->setTitle($offer->content->title);
            $offerModel->setCities($offer->cities);
            $offerList[] = $offerModel;
        }
        
        return $offerList;
	}    
    
    /**
     * @param array $offers
     * @param array $parameters     
     * @return array $offerList
     */      
    public static function filterOfferList($offers, $parameters) {
        
        $offerList = [];
        
        foreach ($offers as $offer) {
            
            if (isset($parameters['city']) && in_array(ucfirst($parameters['city']), $offer->cities))
                $offerList[] = $offer;
        }
        
        return $offerList;
    }   
}