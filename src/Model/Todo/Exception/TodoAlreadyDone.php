<?php
/**
 * This file is part of prooph/proophessor-do.
 * (c) 2014-2016 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2016 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Prooph\ProophessorDo\Model\Todo\Exception;

use Prooph\ProophessorDo\Model\Todo\Todo;
use Prooph\ProophessorDo\Model\Todo\TodoStatus;

/**
 * Class TodoAlreadyDone
 *
 * @package Prooph\ProophessorDo\Model\Todo\Exception
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
final class TodoAlreadyDone extends \RuntimeException
{
    /**
     * @param TodoStatus $status
     * @param Todo $todo
     * @return TodoAlreadyDone
     */
    public static function triedStatus(TodoStatus $status, Todo $todo)
    {
        return new self(sprintf(
            'Tried to change status of Todo %s to %s. But Todo is already marked as done!',
            $todo->todoId()->toString(),
            $status->toString()
        ));
    }
}
