# OpenAPI\Client\PasswordApi

All URIs are relative to *https://atlas.forsta.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**passwordResetCreate**](PasswordApi.md#passwordResetCreate) | **POST** /password/reset/ | 
[**passwordResetUpdate**](PasswordApi.md#passwordResetUpdate) | **PUT** /password/reset/{user_id}/ | 



## passwordResetCreate

> \OpenAPI\Client\Model\PasswordReset passwordResetCreate($data)



Sends email or SMS to a user with a one time token for password resetting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PasswordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \OpenAPI\Client\Model\PasswordReset(); // \OpenAPI\Client\Model\PasswordReset | 

try {
    $result = $apiInstance->passwordResetCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordApi->passwordResetCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\OpenAPI\Client\Model\PasswordReset**](../Model/PasswordReset.md)|  |

### Return type

[**\OpenAPI\Client\Model\PasswordReset**](../Model/PasswordReset.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## passwordResetUpdate

> \OpenAPI\Client\Model\PasswordResetConfirm passwordResetUpdate($user_id, $data)



Confirm the password reset via token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PasswordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | 
$data = new \OpenAPI\Client\Model\PasswordResetConfirm(); // \OpenAPI\Client\Model\PasswordResetConfirm | 

try {
    $result = $apiInstance->passwordResetUpdate($user_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordApi->passwordResetUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\PasswordResetConfirm**](../Model/PasswordResetConfirm.md)|  |

### Return type

[**\OpenAPI\Client\Model\PasswordResetConfirm**](../Model/PasswordResetConfirm.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

