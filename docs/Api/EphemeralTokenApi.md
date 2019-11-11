# Swagger\Client\EphemeralTokenApi

All URIs are relative to *https://atlas.forsta.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ephemeralTokenCreate**](EphemeralTokenApi.md#ephemeralTokenCreate) | **POST** /ephemeral-token | Retrieves the ephemeral user token
[**ephemeralTokenDelete**](EphemeralTokenApi.md#ephemeralTokenDelete) | **DELETE** /ephemeral-token | Delete the ephemeral user token


# **ephemeralTokenCreate**
> \Swagger\Client\Model\EphemeralTokenPostResponse ephemeralTokenCreate()

Retrieves the ephemeral user token

Retrieves the current ephemeral user token for the requestors org. The ephemeral token is typically used for creating ephemeral users via our [embedded client](https://docs.forsta.io/docs/embedded-client)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JSON Web Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EphemeralTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->ephemeralTokenCreate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EphemeralTokenApi->ephemeralTokenCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\EphemeralTokenPostResponse**](../Model/EphemeralTokenPostResponse.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ephemeralTokenDelete**
> ephemeralTokenDelete()

Delete the ephemeral user token

Sets the ephemeral user token the requestors org to null.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JSON Web Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EphemeralTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->ephemeralTokenDelete();
} catch (Exception $e) {
    echo 'Exception when calling EphemeralTokenApi->ephemeralTokenDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

