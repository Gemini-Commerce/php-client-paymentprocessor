# # PaymentprocessorPerformPaymentRequest


## Properties


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_id**| **string** |   |
**payment_id**| **string** |   |
**context**| [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorPaymentContext**](PaymentprocessorPaymentContext.md) |   | [optional]
**code**| **string** | payment type stripe, paypal..  |
**amount**| [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorMoney**](PaymentprocessorMoney.md) |   | [optional]
**currency**| [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorCurrency**](PaymentprocessorCurrency.md) |  for more information please, see Model/PaymentprocessorCurrency.php  | [optional]
**additional_info**| **string** |   | [optional]
**transactions**| [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorTransaction[]**](PaymentprocessorTransaction.md) |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)