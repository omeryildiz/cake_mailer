# Cake Mailer

Cake Mailer is a robust and easy-to-use email sending library for PHP applications. Built on top of CakePHP, it allows developers to seamlessly integrate email functionality into their projects, providing a wide range of features for composing, sending, and managing emails.

## Features

- Simple and intuitive API for sending emails
- Support for various email formats (HTML, plain text)
- Attachment handling
- SMTP configuration
- Template-based email composition
- Logging and debugging tools
- Secure email sending with encryption support

## Installation

To install Cake Mailer, you can use Composer:

```bash
composer require omeryildiz/cake_mailer
```

## Usage

### Basic Usage

To send an email using Cake Mailer, you can follow the example below:

```php
use Cake\Mailer\Mailer;

$mailer = new Mailer('default');
$mailer->setTo('recipient@example.com')
       ->setSubject('Test Email')
       ->setEmailFormat('html')
       ->setTemplate('default')
       ->setViewVars(['content' => 'This is a test email.'])
       ->send();
```

### Configuration

You can configure the email settings in your `config/app.php` file:

```php
'EmailTransport' => [
    'default' => [
        'className' => 'Smtp',
        'host' => 'smtp.example.com',
        'port' => 587,
        'username' => 'your_username',
        'password' => 'your_password',
        'tls' => true,
    ],
],
'Email' => [
    'default' => [
        'transport' => 'default',
        'from' => ['no-reply@example.com' => 'My App'],
    ],
],
```

### Templates

Cake Mailer supports template-based email composition. You can create email templates in the `src/Template/Email` directory. For example, to create an HTML email template, you can create a `default.ctp` file:

```html
<!DOCTYPE html>
<html>
<head>
    <title>Email</title>
</head>
<body>
    <p><?= $content ?></p>
</body>
</html>
```

### Attachments

To add attachments to your emails, you can use the `addAttachments` method:

```php
$mailer->setAttachments([
    'example.txt' => [
        'file' => '/full/path/to/example.txt',
        'mimetype' => 'text/plain',
    ],
]);
```

## Debugging

Cake Mailer provides logging and debugging tools to help you troubleshoot email sending issues. You can enable email logging in your `config/app.php` file:

```php
'Email' => [
    'default' => [
        'log' => true,
    ],
],
```



## Contact

For questions or support, please open an issue on GitHub.

