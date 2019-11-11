# Swagger\Client\EphemeralUserApi

All URIs are relative to *https://atlas.forsta.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ephemeralUserCreate**](EphemeralUserApi.md#ephemeralUserCreate) | **POST** /ephemeral-user/ | Create an ephemeral user


# **ephemeralUserCreate**
> \Swagger\Client\Model\EphemeralUserViewPostResponse ephemeralUserCreate($data)

Create an ephemeral user

Pass your orgs ephemeral token and a users personal information to this endpoint to create an ephemeral user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JSON Web Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EphemeralUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\EphemeralUser(); // \Swagger\Client\Model\EphemeralUser | 

try {
    $result = $apiInstance->ephemeralUserCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EphemeralUserApi->ephemeralUserCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\EphemeralUser**](../Model/EphemeralUser.md)|  |

### Return type

[**\Swagger\Client\Model\EphemeralUserViewPostResponse**](../Model/EphemeralUserViewPostResponse.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

