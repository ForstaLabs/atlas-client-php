# OpenAPI\Client\ApiTokenRefreshApi

All URIs are relative to *https://atlas.forsta.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTokenRefreshCreate**](ApiTokenRefreshApi.md#apiTokenRefreshCreate) | **POST** /api-token-refresh/ | 



## apiTokenRefreshCreate

> \OpenAPI\Client\Model\Refresh apiTokenRefreshCreate($data)



API View that returns a refreshed token (with new expiration) based on existing token  If 'orig_iat' field (original issued-at-time) is found, will first check if it's within expiration window, then copy it to the new token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ApiTokenRefreshApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \OpenAPI\Client\Model\Refresh(); // \OpenAPI\Client\Model\Refresh | 

try {
    $result = $apiInstance->apiTokenRefreshCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiTokenRefreshApi->apiTokenRefreshCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\OpenAPI\Client\Model\Refresh**](../Model/Refresh.md)|  |

### Return type

[**\OpenAPI\Client\Model\Refresh**](../Model/Refresh.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

