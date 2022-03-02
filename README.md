# Email Validator
Validates email string

# Requirements
```
php >= 8.0
```

# Installation
``` 
composer require k.kirillov/email-validator
```

# Usage
```
set valid hosts:
$storage = new HostsStorage();
$storage->set(['array', 'of', 'hosts'];

validate email string:
$validator = new EmailValidator();
$validator->isValid('emailString'); // returns bool
```