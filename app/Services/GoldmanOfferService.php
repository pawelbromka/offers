<?php

namespace App\Service;

use App\Service\GoldmanFormatOfferListService;
use Unirest\Request;

class GoldmanOfferService implements OfferInterface
{

    /**
     * @param string $url
     * @param array|null $parameters
     * @return \Unirest\Response
     */
    public static function get($url, $parameters = NULL)
    {
        return Request::get($url, ['Content-Type' => 'application/json; charset=utf-8'], $parameters);
    }	
	
    /**
     * @return array $offers;
     * @throws \Exception
     */        
    public function getOffers()
    {
        if (!session('offers')) {
            
            $getResponse = GoldmanOfferService::get('https://demo.appmanager.pl/api/v1/ads?_format=json');
            
            if ($getResponse->code != 200) {
                throw new \Exception();
            }
            
            session(['offers' => $getResponse->body->data]);
        }   
        
        $offers = session('offers');
                
        return $offers;
	}
    
    /**
     * @param array $parameters
     * @return array $formattedOffers;
     */       
    public function getFormattedOffers($parameters)
    {
        $offers = $this->getOffers();
        
        if ($parameters)
            $offers = GoldmanFormatOfferListService::filterOfferList($offers, $parameters);
        
        $formattedOffers = GoldmanFormatOfferListService::formatOfferList($offers);
        
        return $formattedOffers;		
	}    
}