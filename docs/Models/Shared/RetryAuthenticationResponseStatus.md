# RetryAuthenticationResponseStatus

The status of the retry. Possible values are:
  * `approved` - The retry was approved and a new code was sent.
  * `denied` - The retry was denied.
  * `no_attempt` - No attempt was sent yet, so a retry cannot be completed.
  * `rate_limited` - The authentication was rate limited and cannot be retried.
  * `expired_auth` - The authentication has expired and cannot be retried.
  * `already_validated` - The authentication has already been validated.



## Values

| Name               | Value              |
| ------------------ | ------------------ |
| `Approved`         | approved           |
| `Denied`           | denied             |
| `NoAttempt`        | no_attempt         |
| `RateLimited`      | rate_limited       |
| `ExpiredAuth`      | expired_auth       |
| `AlreadyValidated` | already_validated  |