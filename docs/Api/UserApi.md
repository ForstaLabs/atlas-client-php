# OpenAPI\Client\UserApi

All URIs are relative to *https://atlas.forsta.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userCreate**](UserApi.md#userCreate) | **POST** /user/ | 
[**userDelete**](UserApi.md#userDelete) | **DELETE** /user/{id}/ | 
[**userInvite**](UserApi.md#userInvite) | **POST** /user/{id}/invite/ | 
[**userList**](UserApi.md#userList) | **GET** /user/ | 
[**userPartialUpdate**](UserApi.md#userPartialUpdate) | **PATCH** /user/{id}/ | 
[**userRead**](UserApi.md#userRead) | **GET** /user/{id}/ | 
[**userUpdate**](UserApi.md#userUpdate) | **PUT** /user/{id}/ | 



## userCreate

> \OpenAPI\Client\Model\User userCreate($data)



API endpoint that allows users to be viewed or edited.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \OpenAPI\Client\Model\User(); // \OpenAPI\Client\Model\User | 

try {
    $result = $apiInstance->userCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\OpenAPI\Client\Model\User**](../Model/User.md)|  |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## userDelete

> userDelete($id)



API endpoint that allows users to be viewed or edited.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A UUID string identifying this User.

try {
    $apiInstance->userDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| A UUID string identifying this User. |

### Return type

void (empty response body)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## userInvite

> \OpenAPI\Client\Model\User userInvite($id, $data)



API endpoint that allows users to be viewed or edited.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A UUID string identifying this User.
$data = new \OpenAPI\Client\Model\User(); // \OpenAPI\Client\Model\User | 

try {
    $result = $apiInstance->userInvite($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| A UUID string identifying this User. |
 **data** | [**\OpenAPI\Client\Model\User**](../Model/User.md)|  |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## userList

> \OpenAPI\Client\Model\InlineResponse2005 userList($id, $email, $tags, $org__id, $user_type, $is_monitor, $created, $created__gt, $created__gte, $created__lt, $created__lte, $modified, $modified__gt, $modified__gte, $modified__lt, $modified__lte, $id_in, $phone_in, $email_in, $ordering, $search, $page, $page_size)



API endpoint that allows users to be viewed or edited.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$email = 'email_example'; // string | 
$tags = 'tags_example'; // string | 
$org__id = 'org__id_example'; // string | 
$user_type = 'user_type_example'; // string | 
$is_monitor = 'is_monitor_example'; // string | 
$created = 'created_example'; // string | 
$created__gt = 'created__gt_example'; // string | 
$created__gte = 'created__gte_example'; // string | 
$created__lt = 'created__lt_example'; // string | 
$created__lte = 'created__lte_example'; // string | 
$modified = 'modified_example'; // string | 
$modified__gt = 'modified__gt_example'; // string | 
$modified__gte = 'modified__gte_example'; // string | 
$modified__lt = 'modified__lt_example'; // string | 
$modified__lte = 'modified__lte_example'; // string | 
$id_in = 'id_in_example'; // string | Multiple values may be separated by commas.
$phone_in = 'phone_in_example'; // string | Multiple values may be separated by commas.
$email_in = 'email_in_example'; // string | Multiple values may be separated by commas.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$search = 'search_example'; // string | A search term.
$page = 56; // int | A page number within the paginated result set.
$page_size = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->userList($id, $email, $tags, $org__id, $user_type, $is_monitor, $created, $created__gt, $created__gte, $created__lt, $created__lte, $modified, $modified__gt, $modified__gte, $modified__lt, $modified__lte, $id_in, $phone_in, $email_in, $ordering, $search, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **tags** | **string**|  | [optional]
 **org__id** | **string**|  | [optional]
 **user_type** | **string**|  | [optional]
 **is_monitor** | **string**|  | [optional]
 **created** | **string**|  | [optional]
 **created__gt** | **string**|  | [optional]
 **created__gte** | **string**|  | [optional]
 **created__lt** | **string**|  | [optional]
 **created__lte** | **string**|  | [optional]
 **modified** | **string**|  | [optional]
 **modified__gt** | **string**|  | [optional]
 **modified__gte** | **string**|  | [optional]
 **modified__lt** | **string**|  | [optional]
 **modified__lte** | **string**|  | [optional]
 **id_in** | **string**| Multiple values may be separated by commas. | [optional]
 **phone_in** | **string**| Multiple values may be separated by commas. | [optional]
 **email_in** | **string**| Multiple values may be separated by commas. | [optional]
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **search** | **string**| A search term. | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## userPartialUpdate

> \OpenAPI\Client\Model\User userPartialUpdate($id, $data)



API endpoint that allows users to be viewed or edited.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A UUID string identifying this User.
$data = new \OpenAPI\Client\Model\User(); // \OpenAPI\Client\Model\User | 

try {
    $result = $apiInstance->userPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| A UUID string identifying this User. |
 **data** | [**\OpenAPI\Client\Model\User**](../Model/User.md)|  |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## userRead

> \OpenAPI\Client\Model\User userRead($id)



API endpoint that allows users to be viewed or edited.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A UUID string identifying this User.

try {
    $result = $apiInstance->userRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| A UUID string identifying this User. |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## userUpdate

> \OpenAPI\Client\Model\User userUpdate($id, $data)



API endpoint that allows users to be viewed or edited.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | A UUID string identifying this User.
$data = new \OpenAPI\Client\Model\User(); // \OpenAPI\Client\Model\User | 

try {
    $result = $apiInstance->userUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| A UUID string identifying this User. |
 **data** | [**\OpenAPI\Client\Model\User**](../Model/User.md)|  |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

