<?php
/**
 * DirectoryApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Forsta Atlas API
 *
 * User and Tag management API for Forsta Messaging Platform
 *
 * OpenAPI spec version: v1
 * Contact: support@forsta.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * DirectoryApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DirectoryApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation directoryDomainList
     *
     * @param  string $id  (optional)
     * @param  string $id_in Multiple values may be separated by commas. (optional)
     * @param  string $slug  (optional)
     * @param  string $slug_in Multiple values may be separated by commas. (optional)
     * @param  string $ordering Which field to use when ordering the results. (optional)
     * @param  string $search A search term. (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse200
     */
    public function directoryDomainList($id = null, $id_in = null, $slug = null, $slug_in = null, $ordering = null, $search = null, $page = null, $page_size = null)
    {
        list($response) = $this->directoryDomainListWithHttpInfo($id, $id_in, $slug, $slug_in, $ordering, $search, $page, $page_size);
        return $response;
    }

    /**
     * Operation directoryDomainListWithHttpInfo
     *
     * @param  string $id  (optional)
     * @param  string $id_in Multiple values may be separated by commas. (optional)
     * @param  string $slug  (optional)
     * @param  string $slug_in Multiple values may be separated by commas. (optional)
     * @param  string $ordering Which field to use when ordering the results. (optional)
     * @param  string $search A search term. (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function directoryDomainListWithHttpInfo($id = null, $id_in = null, $slug = null, $slug_in = null, $ordering = null, $search = null, $page = null, $page_size = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse200';
        $request = $this->directoryDomainListRequest($id, $id_in, $slug, $slug_in, $ordering, $search, $page, $page_size);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation directoryDomainListAsync
     *
     * 
     *
     * @param  string $id  (optional)
     * @param  string $id_in Multiple values may be separated by commas. (optional)
     * @param  string $slug  (optional)
     * @param  string $slug_in Multiple values may be separated by commas. (optional)
     * @param  string $ordering Which field to use when ordering the results. (optional)
     * @param  string $search A search term. (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function directoryDomainListAsync($id = null, $id_in = null, $slug = null, $slug_in = null, $ordering = null, $search = null, $page = null, $page_size = null)
    {
        return $this->directoryDomainListAsyncWithHttpInfo($id, $id_in, $slug, $slug_in, $ordering, $search, $page, $page_size)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation directoryDomainListAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $id  (optional)
     * @param  string $id_in Multiple values may be separated by commas. (optional)
     * @param  string $slug  (optional)
     * @param  string $slug_in Multiple values may be separated by commas. (optional)
     * @param  string $ordering Which field to use when ordering the results. (optional)
     * @param  string $search A search term. (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function directoryDomainListAsyncWithHttpInfo($id = null, $id_in = null, $slug = null, $slug_in = null, $ordering = null, $search = null, $page = null, $page_size = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse200';
        $request = $this->directoryDomainListRequest($id, $id_in, $slug, $slug_in, $ordering, $search, $page, $page_size);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'directoryDomainList'
     *
     * @param  string $id  (optional)
     * @param  string $id_in Multiple values may be separated by commas. (optional)
     * @param  string $slug  (optional)
     * @param  string $slug_in Multiple values may be separated by commas. (optional)
     * @param  string $ordering Which field to use when ordering the results. (optional)
     * @param  string $search A search term. (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function directoryDomainListRequest($id = null, $id_in = null, $slug = null, $slug_in = null, $ordering = null, $search = null, $page = null, $page_size = null)
    {

        $resourcePath = '/directory/domain/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
        // query params
        if ($id_in !== null) {
            $queryParams['id_in'] = ObjectSerializer::toQueryValue($id_in);
        }
        // query params
        if ($slug !== null) {
            $queryParams['slug'] = ObjectSerializer::toQueryValue($slug);
        }
        // query params
        if ($slug_in !== null) {
            $queryParams['slug_in'] = ObjectSerializer::toQueryValue($slug_in);
        }
        // query params
        if ($ordering !== null) {
            $queryParams['ordering'] = ObjectSerializer::toQueryValue($ordering);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = ObjectSerializer::toQueryValue($search);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['page_size'] = ObjectSerializer::toQueryValue($page_size);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation directoryUserList
     *
     * @param  string $id  (optional)
     * @param  string $id_in Multiple values may be separated by commas. (optional)
     * @param  string $slug  (optional)
     * @param  string $slug_in Multiple values may be separated by commas. (optional)
     * @param  string $phone  (optional)
     * @param  string $phone_in Multiple values may be separated by commas. (optional)
     * @param  string $email  (optional)
     * @param  string $email_in Multiple values may be separated by commas. (optional)
     * @param  string $user_type  (optional)
     * @param  string $is_monitor  (optional)
     * @param  string $created  (optional)
     * @param  string $created__gt  (optional)
     * @param  string $created__gte  (optional)
     * @param  string $created__lt  (optional)
     * @param  string $created__lte  (optional)
     * @param  string $modified  (optional)
     * @param  string $modified__gt  (optional)
     * @param  string $modified__gte  (optional)
     * @param  string $modified__lt  (optional)
     * @param  string $modified__lte  (optional)
     * @param  string $ordering Which field to use when ordering the results. (optional)
     * @param  string $search A search term. (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2001
     */
    public function directoryUserList($id = null, $id_in = null, $slug = null, $slug_in = null, $phone = null, $phone_in = null, $email = null, $email_in = null, $user_type = null, $is_monitor = null, $created = null, $created__gt = null, $created__gte = null, $created__lt = null, $created__lte = null, $modified = null, $modified__gt = null, $modified__gte = null, $modified__lt = null, $modified__lte = null, $ordering = null, $search = null, $page = null, $page_size = null)
    {
        list($response) = $this->directoryUserListWithHttpInfo($id, $id_in, $slug, $slug_in, $phone, $phone_in, $email, $email_in, $user_type, $is_monitor, $created, $created__gt, $created__gte, $created__lt, $created__lte, $modified, $modified__gt, $modified__gte, $modified__lt, $modified__lte, $ordering, $search, $page, $page_size);
        return $response;
    }

    /**
     * Operation directoryUserListWithHttpInfo
     *
     * @param  string $id  (optional)
     * @param  string $id_in Multiple values may be separated by commas. (optional)
     * @param  string $slug  (optional)
     * @param  string $slug_in Multiple values may be separated by commas. (optional)
     * @param  string $phone  (optional)
     * @param  string $phone_in Multiple values may be separated by commas. (optional)
     * @param  string $email  (optional)
     * @param  string $email_in Multiple values may be separated by commas. (optional)
     * @param  string $user_type  (optional)
     * @param  string $is_monitor  (optional)
     * @param  string $created  (optional)
     * @param  string $created__gt  (optional)
     * @param  string $created__gte  (optional)
     * @param  string $created__lt  (optional)
     * @param  string $created__lte  (optional)
     * @param  string $modified  (optional)
     * @param  string $modified__gt  (optional)
     * @param  string $modified__gte  (optional)
     * @param  string $modified__lt  (optional)
     * @param  string $modified__lte  (optional)
     * @param  string $ordering Which field to use when ordering the results. (optional)
     * @param  string $search A search term. (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function directoryUserListWithHttpInfo($id = null, $id_in = null, $slug = null, $slug_in = null, $phone = null, $phone_in = null, $email = null, $email_in = null, $user_type = null, $is_monitor = null, $created = null, $created__gt = null, $created__gte = null, $created__lt = null, $created__lte = null, $modified = null, $modified__gt = null, $modified__gte = null, $modified__lt = null, $modified__lte = null, $ordering = null, $search = null, $page = null, $page_size = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2001';
        $request = $this->directoryUserListRequest($id, $id_in, $slug, $slug_in, $phone, $phone_in, $email, $email_in, $user_type, $is_monitor, $created, $created__gt, $created__gte, $created__lt, $created__lte, $modified, $modified__gt, $modified__gte, $modified__lt, $modified__lte, $ordering, $search, $page, $page_size);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse2001',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation directoryUserListAsync
     *
     * 
     *
     * @param  string $id  (optional)
     * @param  string $id_in Multiple values may be separated by commas. (optional)
     * @param  string $slug  (optional)
     * @param  string $slug_in Multiple values may be separated by commas. (optional)
     * @param  string $phone  (optional)
     * @param  string $phone_in Multiple values may be separated by commas. (optional)
     * @param  string $email  (optional)
     * @param  string $email_in Multiple values may be separated by commas. (optional)
     * @param  string $user_type  (optional)
     * @param  string $is_monitor  (optional)
     * @param  string $created  (optional)
     * @param  string $created__gt  (optional)
     * @param  string $created__gte  (optional)
     * @param  string $created__lt  (optional)
     * @param  string $created__lte  (optional)
     * @param  string $modified  (optional)
     * @param  string $modified__gt  (optional)
     * @param  string $modified__gte  (optional)
     * @param  string $modified__lt  (optional)
     * @param  string $modified__lte  (optional)
     * @param  string $ordering Which field to use when ordering the results. (optional)
     * @param  string $search A search term. (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function directoryUserListAsync($id = null, $id_in = null, $slug = null, $slug_in = null, $phone = null, $phone_in = null, $email = null, $email_in = null, $user_type = null, $is_monitor = null, $created = null, $created__gt = null, $created__gte = null, $created__lt = null, $created__lte = null, $modified = null, $modified__gt = null, $modified__gte = null, $modified__lt = null, $modified__lte = null, $ordering = null, $search = null, $page = null, $page_size = null)
    {
        return $this->directoryUserListAsyncWithHttpInfo($id, $id_in, $slug, $slug_in, $phone, $phone_in, $email, $email_in, $user_type, $is_monitor, $created, $created__gt, $created__gte, $created__lt, $created__lte, $modified, $modified__gt, $modified__gte, $modified__lt, $modified__lte, $ordering, $search, $page, $page_size)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation directoryUserListAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $id  (optional)
     * @param  string $id_in Multiple values may be separated by commas. (optional)
     * @param  string $slug  (optional)
     * @param  string $slug_in Multiple values may be separated by commas. (optional)
     * @param  string $phone  (optional)
     * @param  string $phone_in Multiple values may be separated by commas. (optional)
     * @param  string $email  (optional)
     * @param  string $email_in Multiple values may be separated by commas. (optional)
     * @param  string $user_type  (optional)
     * @param  string $is_monitor  (optional)
     * @param  string $created  (optional)
     * @param  string $created__gt  (optional)
     * @param  string $created__gte  (optional)
     * @param  string $created__lt  (optional)
     * @param  string $created__lte  (optional)
     * @param  string $modified  (optional)
     * @param  string $modified__gt  (optional)
     * @param  string $modified__gte  (optional)
     * @param  string $modified__lt  (optional)
     * @param  string $modified__lte  (optional)
     * @param  string $ordering Which field to use when ordering the results. (optional)
     * @param  string $search A search term. (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function directoryUserListAsyncWithHttpInfo($id = null, $id_in = null, $slug = null, $slug_in = null, $phone = null, $phone_in = null, $email = null, $email_in = null, $user_type = null, $is_monitor = null, $created = null, $created__gt = null, $created__gte = null, $created__lt = null, $created__lte = null, $modified = null, $modified__gt = null, $modified__gte = null, $modified__lt = null, $modified__lte = null, $ordering = null, $search = null, $page = null, $page_size = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2001';
        $request = $this->directoryUserListRequest($id, $id_in, $slug, $slug_in, $phone, $phone_in, $email, $email_in, $user_type, $is_monitor, $created, $created__gt, $created__gte, $created__lt, $created__lte, $modified, $modified__gt, $modified__gte, $modified__lt, $modified__lte, $ordering, $search, $page, $page_size);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'directoryUserList'
     *
     * @param  string $id  (optional)
     * @param  string $id_in Multiple values may be separated by commas. (optional)
     * @param  string $slug  (optional)
     * @param  string $slug_in Multiple values may be separated by commas. (optional)
     * @param  string $phone  (optional)
     * @param  string $phone_in Multiple values may be separated by commas. (optional)
     * @param  string $email  (optional)
     * @param  string $email_in Multiple values may be separated by commas. (optional)
     * @param  string $user_type  (optional)
     * @param  string $is_monitor  (optional)
     * @param  string $created  (optional)
     * @param  string $created__gt  (optional)
     * @param  string $created__gte  (optional)
     * @param  string $created__lt  (optional)
     * @param  string $created__lte  (optional)
     * @param  string $modified  (optional)
     * @param  string $modified__gt  (optional)
     * @param  string $modified__gte  (optional)
     * @param  string $modified__lt  (optional)
     * @param  string $modified__lte  (optional)
     * @param  string $ordering Which field to use when ordering the results. (optional)
     * @param  string $search A search term. (optional)
     * @param  int $page A page number within the paginated result set. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function directoryUserListRequest($id = null, $id_in = null, $slug = null, $slug_in = null, $phone = null, $phone_in = null, $email = null, $email_in = null, $user_type = null, $is_monitor = null, $created = null, $created__gt = null, $created__gte = null, $created__lt = null, $created__lte = null, $modified = null, $modified__gt = null, $modified__gte = null, $modified__lt = null, $modified__lte = null, $ordering = null, $search = null, $page = null, $page_size = null)
    {

        $resourcePath = '/directory/user/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
        // query params
        if ($id_in !== null) {
            $queryParams['id_in'] = ObjectSerializer::toQueryValue($id_in);
        }
        // query params
        if ($slug !== null) {
            $queryParams['slug'] = ObjectSerializer::toQueryValue($slug);
        }
        // query params
        if ($slug_in !== null) {
            $queryParams['slug_in'] = ObjectSerializer::toQueryValue($slug_in);
        }
        // query params
        if ($phone !== null) {
            $queryParams['phone'] = ObjectSerializer::toQueryValue($phone);
        }
        // query params
        if ($phone_in !== null) {
            $queryParams['phone_in'] = ObjectSerializer::toQueryValue($phone_in);
        }
        // query params
        if ($email !== null) {
            $queryParams['email'] = ObjectSerializer::toQueryValue($email);
        }
        // query params
        if ($email_in !== null) {
            $queryParams['email_in'] = ObjectSerializer::toQueryValue($email_in);
        }
        // query params
        if ($user_type !== null) {
            $queryParams['user_type'] = ObjectSerializer::toQueryValue($user_type);
        }
        // query params
        if ($is_monitor !== null) {
            $queryParams['is_monitor'] = ObjectSerializer::toQueryValue($is_monitor);
        }
        // query params
        if ($created !== null) {
            $queryParams['created'] = ObjectSerializer::toQueryValue($created);
        }
        // query params
        if ($created__gt !== null) {
            $queryParams['created__gt'] = ObjectSerializer::toQueryValue($created__gt);
        }
        // query params
        if ($created__gte !== null) {
            $queryParams['created__gte'] = ObjectSerializer::toQueryValue($created__gte);
        }
        // query params
        if ($created__lt !== null) {
            $queryParams['created__lt'] = ObjectSerializer::toQueryValue($created__lt);
        }
        // query params
        if ($created__lte !== null) {
            $queryParams['created__lte'] = ObjectSerializer::toQueryValue($created__lte);
        }
        // query params
        if ($modified !== null) {
            $queryParams['modified'] = ObjectSerializer::toQueryValue($modified);
        }
        // query params
        if ($modified__gt !== null) {
            $queryParams['modified__gt'] = ObjectSerializer::toQueryValue($modified__gt);
        }
        // query params
        if ($modified__gte !== null) {
            $queryParams['modified__gte'] = ObjectSerializer::toQueryValue($modified__gte);
        }
        // query params
        if ($modified__lt !== null) {
            $queryParams['modified__lt'] = ObjectSerializer::toQueryValue($modified__lt);
        }
        // query params
        if ($modified__lte !== null) {
            $queryParams['modified__lte'] = ObjectSerializer::toQueryValue($modified__lte);
        }
        // query params
        if ($ordering !== null) {
            $queryParams['ordering'] = ObjectSerializer::toQueryValue($ordering);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = ObjectSerializer::toQueryValue($search);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['page_size'] = ObjectSerializer::toQueryValue($page_size);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
