
# Plan Error Response Exception

## Structure

`PlanErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `traceId` | `?string` | Optional | - | getTraceId(): ?string | setTraceId(?string traceId): void |
| `error` | [`?ErrorExtended`](../../doc/models/error-extended.md) | Optional | - | getError(): ?ErrorExtended | setError(?ErrorExtended error): void |
| `installmentPlanNumber` | `?string` | Optional | - | getInstallmentPlanNumber(): ?string | setInstallmentPlanNumber(?string installmentPlanNumber): void |
| `paymentInfo` | [`?PaymentInfo`](../../doc/models/payment-info.md) | Optional | - | getPaymentInfo(): ?PaymentInfo | setPaymentInfo(?PaymentInfo paymentInfo): void |

## Example (as JSON)

```json
{
  "TraceId": "TraceId8",
  "Error": {
    "Code": "Code4",
    "Message": "Message0",
    "AdditionalInfo": "AdditionalInfo4",
    "ExtraData": {
      "key0": "ExtraData4",
      "key1": "ExtraData5",
      "key2": "ExtraData6"
    }
  },
  "InstallmentPlanNumber": "InstallmentPlanNumber6",
  "PaymentInfo": {
    "CardBin": "CardBin0",
    "CardType": "Other"
  }
}
```

