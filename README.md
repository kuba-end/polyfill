## Confilcts

* [Symfony ^5.4](#symfony)
* [Sylius ^1.10.6](#sylius)

### Symfony
##### Problem
From `symfony/security-bundle:^5.4` there is a problem with `security.authentication_manager`.
##### Solution
Add this code to your `Kernel.php` to use `AuthenticationManagerPolyfillPass.php` that is making an alias
for the missing service during container building.
```php
protected function build(ContainerBuilder $container): void
{
$container->addCompilerPass(new AuthenticationManagerPolyfillPass());
}
```
### Sylius
##### Problem
From Sylius 1.10.6 `polishsymfonycommunity/symfony-mocker-container` package was flipped from
`require` to `require-dev` in the Sylius composer.json. Because our plugins doesn't read dev requirements
of our dependencies, thus we need add it manually to our plugins.
##### Solution
Add to your composer.json following requirement manually
```json
"require-dev": {
        "polishsymfonycommunity/symfony-mocker-container": "^1.0"
    }
```
or through ` composer require polishsymfonycommunity/symfony-mocker-container:^1.0 --dev
`
