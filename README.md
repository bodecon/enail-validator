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
fetch album data:
$validator = new EmailValidator();
$validator->isValid('emailString'); // returns bool
```