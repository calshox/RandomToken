# RandomeToken
Random token generator with custom length
```
string Token::generate(int $length [, int $mode = ALL [, string $alphabet = ""]])
```
`$length`  Length of the resulting string

`$mode`  [CUSTOM, NUMERIC, LOWERCASE, UPPERCASE, NUMLOWER, NUMUPPER, ALL] Alphabet mode

`$alphabet`  Custom Alphabet if mode = CUSTOM

## Getting Started


### Prerequisites

Composer is required

### Installing
```
composer require calshox/randomtoken
```
##Examples

Generating a alphanumeric token [a-zA-Z0-9]
 
```
require_once __DIR__ . "/../vendor/autoload.php";

use RandomToken\Token;

echo Token::generate(8); //f.ex: Fe3fLv5A
```

Only uppercase [A-Z]
```
echo Token::generate(8, Token::UPPERCASE); //f.ex: HRWEQERB
```
Only numeric [0-9]
```
echo Token::generate(8, Token::NUMERIC); //f.ex: 72468234
```
Only lowercase [a-z]
```
echo Token::generate(8, Token::LOWERCASE); //f.ex: felgncoi
```
Numeric and lowercase [a-z0-9]
```
echo Token::generate(8, Token::NUMLOWER); //f.ex: 9kid6gfb
```
Numeric and uppercase [a-z0-9]
```
echo Token::generate(8, Token::NUMUPPER); //f.ex: DYN7DP0X

```

Custom Alphabet
```
echo Token::generate(8, Token::CUSTOM, "AEIOU0123456789"); //f.ex: E312AI7I

```



## Authors

* **Carlos Vázquez** - [Github](https://github.com/calshox/RandomToken)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details