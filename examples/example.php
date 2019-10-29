<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', '');
    $apiInstance = new Swagger\Client\Api\LoginApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $config
    );
    $data = new \Swagger\Client\Model\UserAuthentication(); // \Swagger\Client\Model\UserAuthentication | 
    
    $fq_tag = 'ben.test:my.organization';
    $password = 'password5589';
    
    $data->setFqTag($fq_tag);
    $data->setPassword($password);

    try {
        $result = $apiInstance->loginCreate($data);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling LoginApi->loginCreate: ', $e->getMessage(), PHP_EOL;
    }

?>