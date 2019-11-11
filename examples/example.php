<?php
    require_once(__DIR__.'/../vendor/autoload.php');

    // login
    $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', '');
    $apiInstance = new Swagger\Client\Api\LoginApi(
        new GuzzleHttp\Client(),
        $config
    );
    $data = new \Swagger\Client\Model\UserAuthentication();
    
    $userauthtoken = 'YOUR_USER_AUTH_TOKEN_HERE';    
    $data->setUserauthtoken($userauthtoken);

    try {
        $result = $apiInstance->loginCreate($data);
        print_r($result);
        $authedConfig = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'JWT '.$result['token']);
        $authedApiInstance = new Swagger\Client\Api\UserApi(
            new GuzzleHttp\Client(),
            $authedConfig
        );

        $new_user_data = new \Swagger\Client\Model\User();
        $new_user_data->setEmail('USER@EMAIL.COM');
        $new_user_data->setFirstName('FIRST_NAME');
        $new_user_data->setLastName('LAST_NAME');
        $new_user_data->setTagSlug('FIRST_NAME.LAST_NAME');
        
        $new_user_result = $authedApiInstance->userCreate($new_user_data);
        print_r($new_user_result);
    } catch (Exception $e) {
        echo 'Exception: ', $e->getMessage(), PHP_EOL;
    }

    

?>