# Swagger\Client\DirectoryApi

All URIs are relative to *http://atlas.forsta.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**directoryDomainList**](DirectoryApi.md#directoryDomainList) | **GET** /directory/domain/ | A read-only domain directory.
[**directoryUserList**](DirectoryApi.md#directoryUserList) | **GET** /directory/user/ | A read-only global user directory.


# **directoryDomainList**
> \Swagger\Client\Model\InlineResponse200 directoryDomainList($id, $id_in, $slug, $slug_in, $ordering, $search, $page, $page_size)

A read-only domain directory.

A read-only, as light weight as possible, global domain directory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JSON Web Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$id_in = "id_in_example"; // string | Multiple values may be separated by commas.
$slug = "slug_example"; // string | 
$slug_in = "slug_in_example"; // string | Multiple values may be separated by commas.
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$search = "search_example"; // string | A search term.
$page = 56; // int | A page number within the paginated result set.
$page_size = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->directoryDomainList($id, $id_in, $slug, $slug_in, $ordering, $search, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->directoryDomainList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | [optional]
 **id_in** | **string**| Multiple values may be separated by commas. | [optional]
 **slug** | **string**|  | [optional]
 **slug_in** | **string**| Multiple values may be separated by commas. | [optional]
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **search** | **string**| A search term. | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **directoryUserList**
> \Swagger\Client\Model\InlineResponse2001 directoryUserList($id, $id_in, $slug, $slug_in, $phone, $phone_in, $email, $email_in, $user_type, $is_monitor, $created, $created__gt, $created__gte, $created__lt, $created__lte, $modified, $modified__gt, $modified__gte, $modified__lt, $modified__lte, $ordering, $search, $page, $page_size)

A read-only global user directory.

A read-only user directory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JSON Web Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$id_in = "id_in_example"; // string | Multiple values may be separated by commas.
$slug = "slug_example"; // string | 
$slug_in = "slug_in_example"; // string | Multiple values may be separated by commas.
$phone = "phone_example"; // string | 
$phone_in = "phone_in_example"; // string | Multiple values may be separated by commas.
$email = "email_example"; // string | 
$email_in = "email_in_example"; // string | Multiple values may be separated by commas.
$user_type = "user_type_example"; // string | 
$is_monitor = "is_monitor_example"; // string | 
$created = "created_example"; // string | 
$created__gt = "created__gt_example"; // string | 
$created__gte = "created__gte_example"; // string | 
$created__lt = "created__lt_example"; // string | 
$created__lte = "created__lte_example"; // string | 
$modified = "modified_example"; // string | 
$modified__gt = "modified__gt_example"; // string | 
$modified__gte = "modified__gte_example"; // string | 
$modified__lt = "modified__lt_example"; // string | 
$modified__lte = "modified__lte_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$search = "search_example"; // string | A search term.
$page = 56; // int | A page number within the paginated result set.
$page_size = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->directoryUserList($id, $id_in, $slug, $slug_in, $phone, $phone_in, $email, $email_in, $user_type, $is_monitor, $created, $created__gt, $created__gte, $created__lt, $created__lte, $modified, $modified__gt, $modified__gte, $modified__lt, $modified__lte, $ordering, $search, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->directoryUserList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | [optional]
 **id_in** | **string**| Multiple values may be separated by commas. | [optional]
 **slug** | **string**|  | [optional]
 **slug_in** | **string**| Multiple values may be separated by commas. | [optional]
 **phone** | **string**|  | [optional]
 **phone_in** | **string**| Multiple values may be separated by commas. | [optional]
 **email** | **string**|  | [optional]
 **email_in** | **string**| Multiple values may be separated by commas. | [optional]
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
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **search** | **string**| A search term. | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

