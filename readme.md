# Laravel Response Kit 🚀

[![Latest Version on Packagist](https://img.shields.io/packagist/v/balouch/laravel-response-kit.svg?style=flat-square)](https://packagist.org/packages/balouch/laravel-response-kit)
[![Total Downloads](https://img.shields.io/packagist/dt/balouch/laravel-response-kit.svg?style=flat-square)](https://packagist.org/packages/balouch/laravel-response-kit)
[![License](https://img.shields.io/packagist/l/balouch/laravel-response-kit.svg?style=flat-square)](https://packagist.org/packages/balouch/laravel-response-kit)

**Laravel Response Kit** is a smart, lightweight API response formatter for Laravel. It provides a consistent JSON structure for your API, making it easy for frontend applications (React, Vue, Flutter, etc.) to handle success and error states.

---

## 🛠 Features

- ✅ **Global helper functions** for quick access.
- ✅ **Standardized JSON structure** across your app.
- ✅ **Easy handling** of success data and error arrays.
- ✅ **Lightweight** with zero configuration needed.

---

## 📦 Installation

You can install the package via Composer:

```bash
composer require balouch/laravel-response-kit
```
## 🚀 Usage

This package provides two global helper functions: `response_success` and `response_error`.

### 1. Success Response
Use this function when an operation is completed successfully.

**Syntax:**
```php
response_success($data = [], $message = "Success", $code = 200);
```

## Controller Example:
```php
public function index()
{
    $users = User::all();
    return response_success($users, "Users retrieved successfully.");
}
```
## Json Output
```json
{
    "success": true,
    "message": "Users retrieved successfully.",
    "data": [
        { "id": 1, "name": "Irshad Khan" },
        { "id": 2, "name": "Hussain Irshad" }
    ],
    "code": 200
}
```

---

### 2. Error Response
Use this function for validation failures, unauthorized access, or general errors.

**Syntax:**
```php
response_error($message = "Error", $errors = [], $code = 400);
```

## Controller Example:
```php
public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
    ]);

    if ($validator->fails()) {
        return response_error("Validation Failed", $validator->errors(), 422);
    }
}
```

## Json Output
```json
{
    "success": false,
    "message": "Validation Failed",
    "errors": {
        "email": ["The email field is required."]
    },
    "code": 422
}
```

