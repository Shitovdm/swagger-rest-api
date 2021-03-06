<?php
/**
 * ServiceApiInterface
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * REST API for the MFC mobile application
 *
 * REST API
 *
 * OpenAPI spec version: 1.0.1
 * Contact: d.shitov@artepay.ru
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Server\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Swagger\Server\Model\Service;

/**
 * ServiceApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  Swagger\Server\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
interface ServiceApiInterface
{

    /**
     * Operation directService
     *
     * Service type - direct
     *
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\Service[]
     *
     */
    public function directService(&$responseCode, array &$responseHeaders);

    /**
     * Operation electronicService
     *
     * Service type - electronic
     *
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\Service[]
     *
     */
    public function electronicService(&$responseCode, array &$responseHeaders);

    /**
     * Operation infoService
     *
     * Service information
     *
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\Service[]
     *
     */
    public function infoService(&$responseCode, array &$responseHeaders);
}
