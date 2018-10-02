<?php

namespace AppBundle\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Swagger\Server\Model\ApiResponse;
use Swagger\Server\Model\Service;
use Swagger\Server\Api\ServiceApiInterface;

class ServiceApi implements ServiceApiInterface
{
    /**
     *  Operation infoService
     *  Route - /api/service/info
     *  
     */
    public function infoService(&$responseCode, array &$responseHeaders)
    {
        return "There is no implementation for this method! Existed route: /api/service/info";
    }

    /**
     *  Operation directService
     *  Route - /api/service/direct
     *
     */
    public function directService(&$responseCode, array &$responseHeaders)
    {
        return "There is no implementation for this method! Existed route: /api/service/direct";
    }

    /**
     *  Operation electronicService
     *  Route - /api/service/electronic
     *  
     */
    public function electronicService(&$responseCode, array &$responseHeaders)
    {
        return "There is no implementation for this method! Existed route: /api/service/electronic";
    }


}