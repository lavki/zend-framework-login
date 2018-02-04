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

```bash
  $ composer require zendframework/zend-validator
  $ composer require zendframework/zend-filter
```
## JavaScript file:

```bash
$(document).ready(function()
{
	// LOGIN VALIDATION FORM
	$('#authentication').validate({
		rules: {
			email: {
				required: 	true,
				email: 		true
			},
			password: {
				required: 	true,
				minlength: 	5,
				maxlength: 	30
			}
		},
		messages: {
			email: {
				required: 	'Електронна адресса не вказана',
				email: 		'Електронна адреса вказана не вірно'
			},
			password: {
				required: 	'Гасло не вказане',
				minlength: 	'Гасло занадто маленьке',
				maxlength: 	'Гасло занадто велике'
			}
		}
	});
});
```
## add script to the your html page:

```bash
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
```

Enjoy!
