<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    /**
     * @var int
     */    
    private $id;
    
    /**
     * @var string
     */    
    private $title;
    
    /**
     * @var array
     */    
    private $cities;

    
    /**
     * @param int $id
     */    
    public function setId($id)
    {
        $this->id = $id;
    }    
    
    /**
     * @return int $id
     */    
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $title
     */    
    public function setTitle($title)
    {
        $this->title = $title;
    }  
    
    /**
     * @return string $title
     */        
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param array $cities
     */      
    public function setCities($cities)
    {
        $this->cities = $cities;
    }

    /**
     * @return array $cities
     */         
    public function getCities()
    {
        return $this->cities;
    }    
    
    /**
     * @return string $cities
     */         
    public function getCitiesAsString()
    {
        return implode(", ", $this->cities);
    }    
}
