# Unit tests suite

To use unit tests with Travis, we need to run tests in local, generate response cache from ZenDesk.

## Generate tests cache

* create zendesk sandbox
* add a ticket with a tag
* add an organization field
* add an user field
* add an ticket field
* copy `tests/configuration.php.dist` to `tests/configuration.php`
* populate configuration with user field id, organization field id and ticket field id
* copy `config/local.config.php.dist` to `config/local.sandbox.config.php`
* populate config with your sandbox credentials
* run tests with `tests/phpunit.sh`
* generate new token to prevent hack in your system