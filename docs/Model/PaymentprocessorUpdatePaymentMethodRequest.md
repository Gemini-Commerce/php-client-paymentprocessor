# # PaymentprocessorUpdatePaymentMethodRequest


## Properties


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_id**| **string** |   |
**code**| **string** |   |
**title**| [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorLocalizedText**](PaymentprocessorLocalizedText.md) |   | [optional]
**label**| [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorLocalizedText**](PaymentprocessorLocalizedText.md) |   | [optional]
**enabled**| **bool** |   | [optional]
**amount**| [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorMoney**](PaymentprocessorMoney.md) |   | [optional]
**currency**| [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorCurrency**](PaymentprocessorCurrency.md) |  for more information please, see Model/PaymentprocessorCurrency.php  | [optional]
**configuration**| **object** |   | [optional]
**is_upfront**| **bool** |   | [optional]
**description**| [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorLocalizedText**](PaymentprocessorLocalizedText.md) |   | [optional]
**restrictions**| [**\GeminiCommerce\Paymentprocessor\Model\PaymentprocessorPaymentMethodRestriction[]**](PaymentprocessorPaymentMethodRestriction.md) |   | [optional]
**field_mask**| **string** |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)