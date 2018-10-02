# Swagger\Server\Api\ServiceApiInterface

All URIs are relative to *https://127.0.0.1/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**directService**](ServiceApiInterface.md#directService) | **GET** /api/service/direct | Service type - direct
[**electronicService**](ServiceApiInterface.md#electronicService) | **GET** /api/service/electronic | Service type - electronic
[**infoService**](ServiceApiInterface.md#infoService) | **GET** /api/service/info | Service information


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.service:
        class: Acme\MyBundle\Api\ServiceApi
        tags:
            - { name: "swagger_server.api", api: "service" }
    # ...
```

## **directService**
> Swagger\Server\Model\Service directService()

Service type - direct

Returns information about the form fields of the questionnaire

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ServiceApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ServiceApiInterface;

class ServiceApi implements ServiceApiInterface
{

    // ...

    /**
     * Implementation of ServiceApiInterface#directService
     */
    public function directService()
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**Swagger\Server\Model\Service**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **electronicService**
> Swagger\Server\Model\Service electronicService()

Service type - electronic

Returns information about the form fields of the questionnaire

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ServiceApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ServiceApiInterface;

class ServiceApi implements ServiceApiInterface
{

    // ...

    /**
     * Implementation of ServiceApiInterface#electronicService
     */
    public function electronicService()
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**Swagger\Server\Model\Service**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **infoService**
> Swagger\Server\Model\Service infoService()

Service information

return information about the questionnaire

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ServiceApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ServiceApiInterface;

class ServiceApi implements ServiceApiInterface
{

    // ...

    /**
     * Implementation of ServiceApiInterface#infoService
     */
    public function infoService()
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**Swagger\Server\Model\Service**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

