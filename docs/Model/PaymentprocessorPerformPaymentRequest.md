# # PaymentprocessorPerformPaymentRequest


## Properties 


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_id**| **string** |   |
**payment_id**| **string** |   |
**context**| [**\OpenAPI\Client\Model\PaymentprocessorPaymentContext**](PaymentprocessorPaymentContext.md) |   | [optional]
**code**| **string** | payment type stripe, paypal..  |
**amount**| [**\OpenAPI\Client\Model\PaymentprocessorMoney**](PaymentprocessorMoney.md) |   | [optional]
**currency**| [**\OpenAPI\Client\Model\PaymentprocessorCurrency**](PaymentprocessorCurrency.md) |  for more information please, see Model/PaymentprocessorCurrency.php  | [optional]
**additional_info**| **string** |   | [optional]
**transactions**| [**\OpenAPI\Client\Model\PaymentprocessorTransaction[]**](PaymentprocessorTransaction.md) |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

