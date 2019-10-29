# Swagger\Client\ConversationApi

All URIs are relative to *http://localhost:8000/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**conversationCreate**](ConversationApi.md#conversationCreate) | **POST** /conversation/ | Creates a conversation token.
[**conversationCreate_0**](ConversationApi.md#conversationCreate_0) | **POST** /conversation/{conversation_token}/ | Facilitates placing a user into a Conversation specified by its token.
[**conversationRead**](ConversationApi.md#conversationRead) | **GET** /conversation/{conversation_token}/ | Returns information about a conversation (if the requestor is the creator).


# **conversationCreate**
> \Swagger\Client\Model\ConversationUseViewResponse conversationCreate($data)

Creates a conversation token.

Body parameters: * captcha [reCaptcha's output] -- required if not currently signed in * thread_id -- optional thread id (defaults to a random uuid4) * distribution -- optional starting distribution (defaults to empty, or self if signed in) * expires -- optional expiration datetime (defaults to 1 day from now)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JSON Web Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConversationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\ConversationCreate(); // \Swagger\Client\Model\ConversationCreate | 

try {
    $result = $apiInstance->conversationCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->conversationCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ConversationCreate**](../Model/ConversationCreate.md)|  |

### Return type

[**\Swagger\Client\Model\ConversationUseViewResponse**](../Model/ConversationUseViewResponse.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationCreate_0**
> \Swagger\Client\Model\ConversationUseViewResponse conversationCreate_0($conversation_token, $data)

Facilitates placing a user into a Conversation specified by its token.

Body parameters: * first_name, last_name -- optional name used if an ephemeral user is created,                            defaults to \"Anonymous User\" * email, phone -- optional information to be used if an ephemeral user is created  If the caller isn't a signed-in user, an ephemeral user is created in the creator's org (or the public org if the conversation was created anonymously) using the optional user information (the user's tag is generated from slugifying+uniquifying their full name).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JSON Web Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConversationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_token = "conversation_token_example"; // string | 
$data = new \Swagger\Client\Model\ConversationUseViewRequest(); // \Swagger\Client\Model\ConversationUseViewRequest | 

try {
    $result = $apiInstance->conversationCreate_0($conversation_token, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->conversationCreate_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_token** | **string**|  |
 **data** | [**\Swagger\Client\Model\ConversationUseViewRequest**](../Model/ConversationUseViewRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ConversationUseViewResponse**](../Model/ConversationUseViewResponse.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **conversationRead**
> \Swagger\Client\Model\ConversationUseViewResponse conversationRead($conversation_token)

Returns information about a conversation (if the requestor is the creator).

Returns information about a conversation (if the requestor is the creator).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JSON Web Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConversationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_token = "conversation_token_example"; // string | 

try {
    $result = $apiInstance->conversationRead($conversation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->conversationRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_token** | **string**|  |

### Return type

[**\Swagger\Client\Model\ConversationUseViewResponse**](../Model/ConversationUseViewResponse.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

