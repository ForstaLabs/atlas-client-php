# Swagger\Client\UserauthtokenApi

All URIs are relative to *https://atlas.forsta.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userauthtokenCreate**](UserauthtokenApi.md#userauthtokenCreate) | **POST** /userauthtoken/ | Create an auth token
[**userauthtokenDelete**](UserauthtokenApi.md#userauthtokenDelete) | **DELETE** /userauthtoken/{id}/ | Delete a token based on token id
[**userauthtokenList**](UserauthtokenApi.md#userauthtokenList) | **GET** /userauthtoken/ | Retrieve the list of auth tokens for a specified user


# **userauthtokenCreate**
> \Swagger\Client\Model\UserAuthTokenViewPostResponse userauthtokenCreate($data)

Create an auth token

Auth tokens are authentication secrets for a particular user. Pass a user id and token description to this endpoint and recieve a secret token in response

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JSON Web Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\UserauthtokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\UserAuthTokenViewPostRequest(); // \Swagger\Client\Model\UserAuthTokenViewPostRequest | 

try {
    $result = $apiInstance->userauthtokenCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserauthtokenApi->userauthtokenCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\UserAuthTokenViewPostRequest**](../Model/UserAuthTokenViewPostRequest.md)|  |

### Return type

[**\Swagger\Client\Model\UserAuthTokenViewPostResponse**](../Model/UserAuthTokenViewPostResponse.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userauthtokenDelete**
> userauthtokenDelete($id)

Delete a token based on token id

Pass an auth token id to this endpoint to delete it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JSON Web Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\UserauthtokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->userauthtokenDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling UserauthtokenApi->userauthtokenDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userauthtokenList**
> \Swagger\Client\Model\UserAuthTokenViewGetResponse[] userauthtokenList($userid)

Retrieve the list of auth tokens for a specified user

Pass a userid to this endpoint to get the list of authtokens for that user. Each token will have an id and description.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JSON Web Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\UserauthtokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userid = "userid_example"; // string | 

try {
    $result = $apiInstance->userauthtokenList($userid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserauthtokenApi->userauthtokenList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**|  |

### Return type

[**\Swagger\Client\Model\UserAuthTokenViewGetResponse[]**](../Model/UserAuthTokenViewGetResponse.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

