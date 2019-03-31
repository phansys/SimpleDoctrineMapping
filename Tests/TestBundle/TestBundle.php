<?php

/*
 * SimpleDoctrineMapping for Symfony2
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */

declare(strict_types=1);

namespace Mmoreram\SimpleDoctrineMapping\Tests\TestBundle;

use Mmoreram\BaseBundle\BaseBundle;

use Mmoreram\SimpleDoctrineMapping\Tests\TestBundle\CompilerPass\MappingCompilerPass;
use Mmoreram\SimpleDoctrineMapping\Tests\TestBundle\DependencyInjection\TestExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * Class TestBundle.
 */
final class TestBundle extends BaseBundle
{
    /**
     * {@inheritdoc}
     */
    public function getCompilerPasses(): array
    {
        return [
            new MappingCompilerPass(),
        ];
    }

    /**
     * Returns the bundle's container extension.
     *
     * @return ExtensionInterface|null The container extension
     *
     * @throws \LogicException
     */
    public function getContainerExtension()
    {
        return new TestExtension();
    }

    /**
     * {@inheritdoc}
     */
    public static function getBundleDependencies(KernelInterface $kernel): array
    {
        return [
            'Symfony\Bundle\FrameworkBundle\FrameworkBundle',
            'Doctrine\Bundle\DoctrineBundle\DoctrineBundle',
            'Mmoreram\BaseBundle\BaseBundle',
        ];
    }
}
