# RandomToken

##RandomToken function
Random token generator with custom length
```
string RandomToken::generate(int $length [, int $mode = ALL [, string $alphabet = ""]])
```
`$length`  Length of the resulting string

`$mode`  [CUSTOM, NUMERIC, LOWERCASE, UPPERCASE, NUMLOWER, NUMUPPER, ALL] Alphabet mode

`$alphabet`  Custom Alphabet if mode = CUSTOM

##RandomToken function with prefix
Random token generator with custom length and prefix

```
string RandomToken::generatePrefix(string $prefix, int $length [, int $mode = ALL [, string $alphabet = ""]])
```
`$prefix`  Prefix

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

use Shox\RandomToken;

echo RandomToken::generate(8); //f.ex: Fe3fLv5A
```

Only uppercase [A-Z]
```
echo RandomToken::generate(8, RandomToken::UPPERCASE); //f.ex: HRWEQERB
```
Only numeric [0-9]
```
echo RandomToken::generate(8, RandomToken::NUMERIC); //f.ex: 72468234
```
Only lowercase [a-z]
```
echo RandomToken::generate(8, RandomToken::LOWERCASE); //f.ex: felgncoi
```
Numeric and lowercase [a-z0-9]
```
echo RandomToken::generate(8, RandomToken::NUMLOWER); //f.ex: 9kid6gfb
```
Numeric and uppercase [a-z0-9]
```
echo RandomToken::generate(8, RandomToken::NUMUPPER); //f.ex: DYN7DP0X

```

Custom Alphabet
```
echo RandomToken::generate(8, RandomToken::CUSTOM, "AEIOU0123456789"); //f.ex: E312AI7I

```
Only numeric with prefix [0-9]

```
echo RandomToken::generatePrefix("FX", 8, RandomToken::NUMERIC); //f.ex: FX72468234
```



## Authors

* **Carlos Vázquez** - [Github](https://github.com/calshox/RandomToken)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details