# PHP IP Ban System

### What is this PHP IP Ban System?
This system is a IP Ban system made in pure php. It blocks a users IP from acccessing http://example.com/ and redirects the user to http://example.com/banned showing the user is banned. If a user that isn't banned tries accessing the banned page they will be redirected to http://example.com

### How to use it?
Add the php code supplied to the top of your page.

```php
session_start();
require('http://example.com/banned/banlist.php');
```

### How to add IP's to the Banlist?
To add a IP to the ban list, open banned/banlist.php and add another IP to the array. 
##### Example:
```php
$deny = array("127.0.0.1"); // For a single IP
```
But if you want to add more IP's

```php
$deny = array("127.0.0.1", "127.0.0.2", "127.0.0.3"); // For multiple IP's
```
