# OpenAPI\Client\LoginApi

All URIs are relative to *https://atlas.forsta.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**loginAuthtokenCreate**](LoginApi.md#loginAuthtokenCreate) | **POST** /login/authtoken/ | 
[**loginCreate**](LoginApi.md#loginCreate) | **POST** /login/ | 
[**loginSendRead**](LoginApi.md#loginSendRead) | **GET** /login/send/{org}/{tag_slug}/ | 



## loginAuthtokenCreate

> \OpenAPI\Client\Model\UserAuthentication loginAuthtokenCreate($data)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \OpenAPI\Client\Model\UserAuthentication(); // \OpenAPI\Client\Model\UserAuthentication | 

try {
    $result = $apiInstance->loginAuthtokenCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginAuthtokenCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\OpenAPI\Client\Model\UserAuthentication**](../Model/UserAuthentication.md)|  |

### Return type

[**\OpenAPI\Client\Model\UserAuthentication**](../Model/UserAuthentication.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## loginCreate

> \OpenAPI\Client\Model\UserAuthentication loginCreate($data)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \OpenAPI\Client\Model\UserAuthentication(); // \OpenAPI\Client\Model\UserAuthentication | 

try {
    $result = $apiInstance->loginCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\OpenAPI\Client\Model\UserAuthentication**](../Model/UserAuthentication.md)|  |

### Return type

[**\OpenAPI\Client\Model\UserAuthentication**](../Model/UserAuthentication.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## loginSendRead

> \OpenAPI\Client\Model\UserLoginSend loginSendRead($org, $tag_slug)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org = 'org_example'; // string | 
$tag_slug = 'tag_slug_example'; // string | 

try {
    $result = $apiInstance->loginSendRead($org, $tag_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginSendRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org** | **string**|  |
 **tag_slug** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\UserLoginSend**](../Model/UserLoginSend.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

