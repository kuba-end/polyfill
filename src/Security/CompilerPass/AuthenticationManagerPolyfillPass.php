<?php
/*

This file was created by developers working at BitBag

Do you need more information about us and what we do? Visit our   website!

We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/
declare(strict_types=1);

namespace BitBag\AuthenticationPolyfill\Security\CompillerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

final class AuthenticationManagerPolyfillPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (
            false === $container->has('Security.authentication_manager')
            &&
            true === $container->has('Security.authentication.manager')
        ) {
            $container->setAlias('Security.authentication_manager', 'Security.authentication.manager');
        }
    }
}
