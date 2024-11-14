# # PaymentprocessorUpdatePaymentMethodRequest


## Properties 


Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_id**| **string** |   |
**code**| **string** |   |
**title**| [**\OpenAPI\Client\Model\PaymentprocessorLocalizedText**](PaymentprocessorLocalizedText.md) |   | [optional]
**label**| [**\OpenAPI\Client\Model\PaymentprocessorLocalizedText**](PaymentprocessorLocalizedText.md) |   | [optional]
**enabled**| **bool** |   | [optional]
**amount**| [**\OpenAPI\Client\Model\PaymentprocessorMoney**](PaymentprocessorMoney.md) |   | [optional]
**currency**| [**\OpenAPI\Client\Model\PaymentprocessorCurrency**](PaymentprocessorCurrency.md) |  for more information please, see Model/PaymentprocessorCurrency.php  | [optional]
**configuration**| **object** |   | [optional]
**is_upfront**| **bool** |   | [optional]
**description**| [**\OpenAPI\Client\Model\PaymentprocessorLocalizedText**](PaymentprocessorLocalizedText.md) |   | [optional]
**restrictions**| [**\OpenAPI\Client\Model\PaymentprocessorPaymentMethodRestriction[]**](PaymentprocessorPaymentMethodRestriction.md) |   | [optional]
**field_mask**| **string** |   | [optional]


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

