<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Service\GoldmanOfferService;

class OfferController extends Controller
{
    /**
     * Offers main page
     *
     * @param GoldmanOfferService $goldmanOfferService
     * @return View
     */
    public function index($city = NULL, GoldmanOfferService $goldmanOfferService)
    {
        try {
            
            $parameters = [];
            
            if ($city)
                $parameters['city'] = $city;
            
            $offers = $goldmanOfferService->getFormattedOffers($parameters);
			
		} catch (\Exception $exception) {
			die('Wystąpił problem przy pobieraniu ofert. Proszę spróbować za chwilę.');
		}
        
        return view('offer.index', ['offers' => $offers]);
    }
}