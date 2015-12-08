<?php namespace Fungku\HubSpot\Api;

class Owners extends Api
{
    /**
     * @return \Fungku\HubSpot\Http\Response
     */
    public function all()
    {
        $endpoint = "/owners/v2/owners";
        
        return $this->request('get', $endpoint);
    }
}
