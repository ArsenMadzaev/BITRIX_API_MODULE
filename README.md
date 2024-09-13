## Подключение vendor/autoload.php

Для подключения vendor/autoload.php достаточно в файле php_interface/init.php подключить модуль 'fi1a.bitrixrequire':

```php
use Bitrix\Main\Loader;

Loader::includeModule('fi1a.bitrixrequire');
```