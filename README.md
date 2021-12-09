## Confilcts

* [Symfony 5.3 -> 5.4](#symfony)
* [Sylius 1.10.6](#sylius)

### Symfony
##### Problem
xyz
##### Solution
Add this code to your `Kernel.php` to use `AuthenticationManagerPolyfillPass.php` during container building.
```php
protected function build(ContainerBuilder $container): void
{
$container->addCompilerPass(new AuthenticationManagerPolyfillPass());
}
```
### Sylius
##### Problem
xyz
##### Solution
Adds to your composer.json following requirements
```json
"require-dev": {
        "polishsymfonycommunity/symfony-mocker-container": "^1.0"
    }
```
