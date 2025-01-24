```php
function foo(array $arr): int {
  foreach ($arr as $key => $value) {
    if ($value === null) {
      return $key;
    }
  }
  return -1;
}

$arr = [1, 2, null, 4];
$result = foo($arr);
echo $result; //Output: 2

$arr = [1, 2, 3, 4];
$result = foo($arr);
echo $result; //Output: -1
```