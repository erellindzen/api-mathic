
# Payment Method Model

## Structure

`PaymentMethodModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`string(PaymentMethodTypeEnum)`](../../doc/models/payment-method-type-enum.md) | Required | - | getType(): string | setType(string type): void |
| `card` | [`?CardData`](../../doc/models/card-data.md) | Optional | - | getCard(): ?CardData | setCard(?CardData card): void |
| `token` | `?string` | Optional | - | getToken(): ?string | setToken(?string token): void |
| `bluesnapVaultedShopperToken` | [`?BluesnapVaultedShopperToken`](../../doc/models/bluesnap-vaulted-shopper-token.md) | Optional | - | getBluesnapVaultedShopperToken(): ?BluesnapVaultedShopperToken | setBluesnapVaultedShopperToken(?BluesnapVaultedShopperToken bluesnapVaultedShopperToken): void |
| `mockerShopperToken` | [`?MockerShopperToken`](../../doc/models/mocker-shopper-token.md) | Optional | - | getMockerShopperToken(): ?MockerShopperToken | setMockerShopperToken(?MockerShopperToken mockerShopperToken): void |
| `spreedlyToken` | [`?SpreedlyToken`](../../doc/models/spreedly-token.md) | Optional | - | getSpreedlyToken(): ?SpreedlyToken | setSpreedlyToken(?SpreedlyToken spreedlyToken): void |
| `cardPAR` | `?string` | Optional | - | getCardPAR(): ?string | setCardPAR(?string cardPAR): void |

## Example (as JSON)

```json
{
  "Type": "Card",
  "Card": {
    "CardHolderFullName": "CardHolderFullName8",
    "CardNumber": "CardNumber2",
    "CardExpYear": "CardExpYear4",
    "CardExpMonth": "CardExpMonth0",
    "CardCvv": "CardCvv8"
  },
  "Token": "Token6",
  "BluesnapVaultedShopperToken": {
    "Token": "Token4",
    "Last4Digit": "Last4Digit6"
  },
  "MockerShopperToken": {
    "Token": "Token0",
    "Last4Digit": "Last4Digit8"
  },
  "SpreedlyToken": {
    "Token": "Token0",
    "Last4Digit": "Last4Digit8"
  }
}
```

