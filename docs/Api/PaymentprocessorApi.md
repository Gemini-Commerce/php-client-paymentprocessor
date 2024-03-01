# GeminiCommerce\Paymentprocessor\PaymentprocessorApi

All URIs are relative to https://payment-processor.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authorizePayment()**](PaymentprocessorApi.md#authorizePayment) | **POST** /paymentprocessor.Paymentprocessor/AuthorizePayment | Authorize Payment |
| [**createPaymentMethod()**](PaymentprocessorApi.md#createPaymentMethod) | **POST** /paymentprocessor.Paymentprocessor/CreatePaymentMethod | Create Payment Method |
| [**finalizePayment()**](PaymentprocessorApi.md#finalizePayment) | **POST** /paymentprocessor.Paymentprocessor/FinalizePayment | Finalize Payment |
| [**getAvailablePaymentMethod()**](PaymentprocessorApi.md#getAvailablePaymentMethod) | **POST** /paymentprocessor.Paymentprocessor/GetAvailablePaymentMethod | Get Available Payment Method |
| [**getPaymentMethod()**](PaymentprocessorApi.md#getPaymentMethod) | **POST** /paymentprocessor.Paymentprocessor/GetPaymentMethod | Get Payment Method |
| [**getPaymentMethodConfiguration()**](PaymentprocessorApi.md#getPaymentMethodConfiguration) | **POST** /paymentprocessor.Paymentprocessor/GetPaymentMethodConfiguration | Get Payment Method Configuration |
| [**initPayment()**](PaymentprocessorApi.md#initPayment) | **POST** /paymentprocessor.Paymentprocessor/InitPayment | Init Payment |
| [**listAvailablePaymentMethods()**](PaymentprocessorApi.md#listAvailablePaymentMethods) | **POST** /paymentprocessor.Paymentprocessor/ListAvailablePaymentMethods | List Available Payment Methods |
| [**listPaymentMethods()**](PaymentprocessorApi.md#listPaymentMethods) | **POST** /paymentprocessor.Paymentprocessor/ListPaymentMethods | List Payment Methods |
| [**performPayment()**](PaymentprocessorApi.md#performPayment) | **POST** /paymentprocessor.Paymentprocessor/PerformPayment | Perform Payment |
| [**performRefund()**](PaymentprocessorApi.md#performRefund) | **POST** /paymentprocessor.Paymentprocessor/PerformRefund | Perform Refund |
| [**updatePayment()**](PaymentprocessorApi.md#updatePayment) | **POST** /paymentprocessor.Paymentprocessor/UpdatePayment | Update Payment |
| [**updatePaymentMethod()**](PaymentprocessorApi.md#updatePaymentMethod) | **POST** /paymentprocessor.Paymentprocessor/UpdatePaymentMethod | Update Payment Method |
| [**voidPayment()**](PaymentprocessorApi.md#voidPayment) | **POST** /paymentprocessor.Paymentprocessor/VoidPayment | Void Payment |


## `authorizePayment()`

```php
authorizePayment($body): \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorAuthorizePaymentResponse
```

Authorize Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Paymentprocessor\Api\PaymentprocessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorAuthorizePaymentRequest(); // \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorAuthorizePaymentRequest

try {
    $result = $apiInstance->authorizePayment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentprocessorApi->authorizePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorAuthorizePaymentRequest**](../Model/PaymentprocessorAuthorizePaymentRequest.md)|  | |

### Return type

[**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorAuthorizePaymentResponse**](../Model/PaymentprocessorAuthorizePaymentResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPaymentMethod()`

```php
createPaymentMethod($body): \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorPaymentMethod
```

Create Payment Method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Paymentprocessor\Api\PaymentprocessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorCreatePaymentMethodRequest(); // \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorCreatePaymentMethodRequest

try {
    $result = $apiInstance->createPaymentMethod($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentprocessorApi->createPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorCreatePaymentMethodRequest**](../Model/PaymentprocessorCreatePaymentMethodRequest.md)|  | |

### Return type

[**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorPaymentMethod**](../Model/PaymentprocessorPaymentMethod.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `finalizePayment()`

```php
finalizePayment($body): \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorFinalizePaymentResponse
```

Finalize Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Paymentprocessor\Api\PaymentprocessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorFinalizePaymentRequest(); // \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorFinalizePaymentRequest

try {
    $result = $apiInstance->finalizePayment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentprocessorApi->finalizePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorFinalizePaymentRequest**](../Model/PaymentprocessorFinalizePaymentRequest.md)|  | |

### Return type

[**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorFinalizePaymentResponse**](../Model/PaymentprocessorFinalizePaymentResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAvailablePaymentMethod()`

```php
getAvailablePaymentMethod($body): \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorPaymentMethod
```

Get Available Payment Method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Paymentprocessor\Api\PaymentprocessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorGetAvailablePaymentMethodRequest(); // \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorGetAvailablePaymentMethodRequest

try {
    $result = $apiInstance->getAvailablePaymentMethod($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentprocessorApi->getAvailablePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorGetAvailablePaymentMethodRequest**](../Model/PaymentprocessorGetAvailablePaymentMethodRequest.md)|  | |

### Return type

[**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorPaymentMethod**](../Model/PaymentprocessorPaymentMethod.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentMethod()`

```php
getPaymentMethod($body): \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorPaymentMethod
```

Get Payment Method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Paymentprocessor\Api\PaymentprocessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorGetPaymentMethodRequest(); // \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorGetPaymentMethodRequest

try {
    $result = $apiInstance->getPaymentMethod($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentprocessorApi->getPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorGetPaymentMethodRequest**](../Model/PaymentprocessorGetPaymentMethodRequest.md)|  | |

### Return type

[**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorPaymentMethod**](../Model/PaymentprocessorPaymentMethod.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentMethodConfiguration()`

```php
getPaymentMethodConfiguration($body): \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorGetPaymentMethodConfigurationResponse
```

Get Payment Method Configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Paymentprocessor\Api\PaymentprocessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorGetPaymentMethodConfigurationRequest(); // \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorGetPaymentMethodConfigurationRequest

try {
    $result = $apiInstance->getPaymentMethodConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentprocessorApi->getPaymentMethodConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorGetPaymentMethodConfigurationRequest**](../Model/PaymentprocessorGetPaymentMethodConfigurationRequest.md)|  | |

### Return type

[**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorGetPaymentMethodConfigurationResponse**](../Model/PaymentprocessorGetPaymentMethodConfigurationResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initPayment()`

```php
initPayment($body): \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorInitPaymentResponse
```

Init Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Paymentprocessor\Api\PaymentprocessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorInitPaymentRequest(); // \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorInitPaymentRequest

try {
    $result = $apiInstance->initPayment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentprocessorApi->initPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorInitPaymentRequest**](../Model/PaymentprocessorInitPaymentRequest.md)|  | |

### Return type

[**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorInitPaymentResponse**](../Model/PaymentprocessorInitPaymentResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAvailablePaymentMethods()`

```php
listAvailablePaymentMethods($body): \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorListAvailablePaymentMethodsResponse
```

List Available Payment Methods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Paymentprocessor\Api\PaymentprocessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorListAvailablePaymentMethodsRequest(); // \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorListAvailablePaymentMethodsRequest

try {
    $result = $apiInstance->listAvailablePaymentMethods($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentprocessorApi->listAvailablePaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorListAvailablePaymentMethodsRequest**](../Model/PaymentprocessorListAvailablePaymentMethodsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorListAvailablePaymentMethodsResponse**](../Model/PaymentprocessorListAvailablePaymentMethodsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaymentMethods()`

```php
listPaymentMethods($body): \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorListPaymentMethodsResponse
```

List Payment Methods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Paymentprocessor\Api\PaymentprocessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorListPaymentMethodsRequest(); // \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorListPaymentMethodsRequest

try {
    $result = $apiInstance->listPaymentMethods($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentprocessorApi->listPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorListPaymentMethodsRequest**](../Model/PaymentprocessorListPaymentMethodsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorListPaymentMethodsResponse**](../Model/PaymentprocessorListPaymentMethodsResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performPayment()`

```php
performPayment($body): \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorPerformPaymentResponse
```

Perform Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Paymentprocessor\Api\PaymentprocessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorPerformPaymentRequest(); // \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorPerformPaymentRequest

try {
    $result = $apiInstance->performPayment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentprocessorApi->performPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorPerformPaymentRequest**](../Model/PaymentprocessorPerformPaymentRequest.md)|  | |

### Return type

[**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorPerformPaymentResponse**](../Model/PaymentprocessorPerformPaymentResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performRefund()`

```php
performRefund($body): object
```

Perform Refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Paymentprocessor\Api\PaymentprocessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorPerformRefundRequest(); // \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorPerformRefundRequest

try {
    $result = $apiInstance->performRefund($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentprocessorApi->performRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorPerformRefundRequest**](../Model/PaymentprocessorPerformRefundRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePayment()`

```php
updatePayment($body): object
```

Update Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Paymentprocessor\Api\PaymentprocessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorUpdatePaymentRequest(); // \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorUpdatePaymentRequest

try {
    $result = $apiInstance->updatePayment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentprocessorApi->updatePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorUpdatePaymentRequest**](../Model/PaymentprocessorUpdatePaymentRequest.md)|  | |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentMethod()`

```php
updatePaymentMethod($body): \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorPaymentMethod
```

Update Payment Method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Paymentprocessor\Api\PaymentprocessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorUpdatePaymentMethodRequest(); // \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorUpdatePaymentMethodRequest

try {
    $result = $apiInstance->updatePaymentMethod($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentprocessorApi->updatePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorUpdatePaymentMethodRequest**](../Model/PaymentprocessorUpdatePaymentMethodRequest.md)|  | |

### Return type

[**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorPaymentMethod**](../Model/PaymentprocessorPaymentMethod.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidPayment()`

```php
voidPayment($body): \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorVoidPaymentResponse
```

Void Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Paymentprocessor\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Paymentprocessor\Api\PaymentprocessorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorVoidPaymentRequest(); // \GeminiCommerce\Paymentprocessor\Model\PaymentprocessorVoidPaymentRequest

try {
    $result = $apiInstance->voidPayment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentprocessorApi->voidPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorVoidPaymentRequest**](../Model/PaymentprocessorVoidPaymentRequest.md)|  | |

### Return type

[**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorVoidPaymentResponse**](../Model/PaymentprocessorVoidPaymentResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
