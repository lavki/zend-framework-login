# Zend Framework Login

## Introduction

This modul presended form with two imputs: email address and password
all input data is validating and filtering

## Instruction for implementation

1. Clone this repository to your zend-framework project 
  (your-project/module/)
  
2. Update your config file in (config/modules.config.php) and add a line to the returned array:
  return [
    'Zend\Router',
    'Zend\Validator',
    'Application',
    'Login', // <-- add this line
];

3. Update your composer.json file:
  "autoload": {
        "psr-4": {
            "Login\\": "module/Login/src/" // <-- add this line
        }
    },

4. Add required modules to your Zend Framework (if not exists):
on windows:
  composer require zendframework/zend-validator

Enjoy!
