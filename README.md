# qlv4-plugin-getmiddletext

## Install
### Composer
`composer require liesauer/ql-plugin-getmiddletext`

## Use
<pre><code>use liesauer\QLPlugin\GetMiddleText;
use QL\QueryList;

require_once __DIR__ . '/vendor/autoload.php';

$ql = QueryList::getInstance();
$ql->use(GetMiddleText::class);

$result = $ql->getMiddleText('aql plugin testb', 'a', 'b');

var_dump($result);
</code></pre>