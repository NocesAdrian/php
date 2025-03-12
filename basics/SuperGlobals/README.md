Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

these SuperGlobals are arrays so when you use them make sure to use []

```bash
$GLOBALS[];
,,,

```bash
$_SERVER[];
,,,

```bash
$_REQUEST[];
,,,

```bash
$_POST[];
,,,

```bash
$_GET[];
,,,