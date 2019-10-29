# Swagger\Client\TagmathApi

All URIs are relative to *http://atlas.forsta.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tagmathCreate**](TagmathApi.md#tagmathCreate) | **POST** /tagmath/ | Request information based on tag expressions


# **tagmathCreate**
> \Swagger\Client\Model\BulkTagmathViewResponse tagmathCreate($data)

Request information based on tag expressions

Pass a list of [tag expressions](https://docs.forsta.io/docs/tag-expressions)                               to this endpoint to retrieve information about each expression.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JSON Web Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TagmathApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\BulkTagmathViewResponse(); // \Swagger\Client\Model\BulkTagmathViewResponse | 

try {
    $result = $apiInstance->tagmathCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagmathApi->tagmathCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\BulkTagmathViewResponse**](../Model/BulkTagmathViewResponse.md)|  |

### Return type

[**\Swagger\Client\Model\BulkTagmathViewResponse**](../Model/BulkTagmathViewResponse.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

