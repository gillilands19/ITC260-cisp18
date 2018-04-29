<?php

class Pics_Model extends CI_Model{

  public function __construct()
  {
    
  }

  public function get_pics($tag = 'lion')
  {
  
    // API key set in custom-config
    $api_key = $this->config->item('flickr_api_key');
  
    //Build the url for API call
    $perPage = 25;
    $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
    $url.= '&api_key=' . $api_key;
    $url.= '&tags=' . $tag;
    $url.= '&per_page=' . $perPage;
    $url.= '&format=json';
    $url.= '&nojsoncallback=1';
    
    //set list of approved searches. only send API request and return if tag is equal to the following
    if($tag === 'lion' || $tag === 'motorcycle' || $tag === 'mountain' || $tag === 'kayak') 
    {
      $response = json_decode(file_get_contents($url));
      return $response;
    } else {
      $response = false;
      return $response;
    }

  }

}

