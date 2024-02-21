# CreateAuthenticationResponse

A successful response to an authentication creation request.


## Fields

| Field                                                                                                                                                                                                                                                                            | Type                                                                                                                                                                                                                                                                             | Required                                                                                                                                                                                                                                                                         | Description                                                                                                                                                                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `authenticationUuid`                                                                                                                                                                                                                                                             | *?string*                                                                                                                                                                                                                                                                        | :heavy_minus_sign:                                                                                                                                                                                                                                                               | A unique identifier for the authentication that you can use on the /check and /retry endpoints.                                                                                                                                                                                  |
| `createdAt`                                                                                                                                                                                                                                                                      | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                                                                                                    | :heavy_minus_sign:                                                                                                                                                                                                                                                               | N/A                                                                                                                                                                                                                                                                              |
| `expiresAt`                                                                                                                                                                                                                                                                      | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                                                                                                    | :heavy_minus_sign:                                                                                                                                                                                                                                                               | The time at which the authentication expires and can no longer be checked or retried.                                                                                                                                                                                            |
| `status`                                                                                                                                                                                                                                                                         | [?\Ding\DingSDK\Models\Shared\Status](../../Models/Shared/Status.md)                                                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                                                                                               | The status of the authentication. Possible values are:<br/>  * `pending` - The OTP code is being sent.<br/>  * `rate_limited` - This user is rate-limited and cannot receive another code.<br/>  * `spam_detected` - This attempt is flagged as spam. Go to the dashboard for more details.<br/> |