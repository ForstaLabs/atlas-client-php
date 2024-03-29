# Swagger\Client\JoinApi

All URIs are relative to *https://atlas.forsta.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**joinCreate**](JoinApi.md#joinCreate) | **POST** /join/{invitation_token}/ | Creates an account (and an org for it, optionally).
[**joinRead**](JoinApi.md#joinRead) | **GET** /join/{invitation_token}/ | Retrieves the latest info associated with an invitation


# **joinCreate**
> \Swagger\Client\Model\JoinForstaViewPostResponse joinCreate($invitation_token, $data)

Creates an account (and an org for it, optionally).



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JSON Web Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\JoinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invitation_token = "invitation_token_example"; // string | 
$data = new \Swagger\Client\Model\JoinForstaViewPostRequest(); // \Swagger\Client\Model\JoinForstaViewPostRequest | 

try {
    $result = $apiInstance->joinCreate($invitation_token, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JoinApi->joinCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invitation_token** | **string**|  |
 **data** | [**\Swagger\Client\Model\JoinForstaViewPostRequest**](../Model/JoinForstaViewPostRequest.md)|  |

### Return type

[**\Swagger\Client\Model\JoinForstaViewPostResponse**](../Model/JoinForstaViewPostResponse.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **joinRead**
> \Swagger\Client\Model\JoinForstaViewGetResponse joinRead($invitation_token)

Retrieves the latest info associated with an invitation

Fields returned: * phone, email, first_name, last_name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JSON Web Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\JoinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invitation_token = "invitation_token_example"; // string | 

try {
    $result = $apiInstance->joinRead($invitation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JoinApi->joinRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invitation_token** | **string**|  |

### Return type

[**\Swagger\Client\Model\JoinForstaViewGetResponse**](../Model/JoinForstaViewGetResponse.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

