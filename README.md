Add this code to your `Kernel.php` to use `AuthenticationManagerPolyfillPass.php` during container building.
```php
protected function build(ContainerBuilder $container): void
{
$container->addCompilerPass(new AuthenticationManagerPolyfillPass());
}
```
