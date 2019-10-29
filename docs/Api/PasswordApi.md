# Swagger\Client\PasswordApi

All URIs are relative to *http://atlas.forsta.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**passwordResetCreate**](PasswordApi.md#passwordResetCreate) | **POST** /password/reset/ | 
[**passwordResetUpdate**](PasswordApi.md#passwordResetUpdate) | **PUT** /password/reset/{user_id}/ | 


# **passwordResetCreate**
> \Swagger\Client\Model\PasswordResetViewPostResponse passwordResetCreate($data)



Sends email or SMS to a user with a one time token for password resetting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JSON Web Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PasswordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\PasswordReset(); // \Swagger\Client\Model\PasswordReset | 

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
 **data** | [**\Swagger\Client\Model\PasswordReset**](../Model/PasswordReset.md)|  |

### Return type

[**\Swagger\Client\Model\PasswordResetViewPostResponse**](../Model/PasswordResetViewPostResponse.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **passwordResetUpdate**
> \Swagger\Client\Model\PasswordResetViewPutResponse passwordResetUpdate($user_id, $data)



Confirm the password reset via token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JSON Web Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PasswordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$data = new \Swagger\Client\Model\PasswordResetConfirm(); // \Swagger\Client\Model\PasswordResetConfirm | 

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
 **data** | [**\Swagger\Client\Model\PasswordResetConfirm**](../Model/PasswordResetConfirm.md)|  |

### Return type

[**\Swagger\Client\Model\PasswordResetViewPutResponse**](../Model/PasswordResetViewPutResponse.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

