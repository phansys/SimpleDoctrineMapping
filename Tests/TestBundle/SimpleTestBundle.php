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

use Mmoreram\SimpleDoctrineMapping\Tests\TestBundle\CompilerPass\SimpleMappingCompilerPass;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * Class SimpleTestBundle.
 */
final class SimpleTestBundle extends BaseBundle
{
    /**
     * {@inheritdoc}
     */
    public function getCompilerPasses(): array
    {
        return [
            new SimpleMappingCompilerPass(),
        ];
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
