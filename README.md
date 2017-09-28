# QueryList V4 Plugin - GetMiddleText
get middle text
# Installation
```
composer require liesauer/ql-plugin-getmiddletext
```
# Bind
* mixed `getMiddleText` ($wholeText, $leftText, $rightText, $offset = 0, &$position = 0)
* mixed `getMiddleTexts` ($wholeText, $leftText, $rightText, $offset = 0, &$position = 0)
# Usage
```php
use liesauer\QLPlugin\GetMiddleText;
use QL\QueryList;

require_once __DIR__ . '/vendor/autoload.php';

$ql = QueryList::getInstance();
$ql->use(GetMiddleText::class);

$result = $ql->getMiddleText('lql plugin testr', 'l', 'r');

var_dump($result);
// print `ql plugin test`, false returned if not found
```