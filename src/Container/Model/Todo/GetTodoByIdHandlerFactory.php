<?php
/**
 * This file is part of prooph/proophessor-do.
 * (c) 2014-2016 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2016 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Prooph\ProophessorDo\Container\Model\Todo;

use Interop\Container\ContainerInterface;
use Prooph\ProophessorDo\Model\Todo\Handler\GetTodoByIdHandler;
use Prooph\ProophessorDo\Projection\Todo\TodoFinder;

/**
 * @author Bruno Galeotti <bgaleotti@gmail.com>
 */
final class GetTodoByIdHandlerFactory
{
    /**
     * @param ContainerInterface $container
     *
     * @return GetTodoByIdHandler
     */
    public function __invoke(ContainerInterface $container)
    {
        return new GetTodoByIdHandler($container->get(TodoFinder::class));
    }
}
