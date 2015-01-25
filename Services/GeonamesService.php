<?php

/*
 *  Developed by Stefan Matei - stev.matei@gmail.com
 */

namespace Stev\GeonamesBundle\Services;

use Geonames\Geonames;

/**
 * Description of GeonamesService
 *
 * @author stefan
 */
class GeonamesService
{

    /**
     *
     * @var Geonames
     */
    protected $geonames;

    public function __construct(array $configs)
    {
        $this->geonames = new Geonames($configs['username'], $configs['token']);

        if ($configs['use_public'] === true) {
            $this->geonames->url = 'http://api.geonames.org';
        }
    }

    /**
     *
     * @return Geonames
     */
    public function getGeonames()
    {
        return $this->geonames;
    }

}