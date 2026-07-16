<?php

declare(strict_types=1);

namespace N98\Util\Console\Helper;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\HelperSet as BaseHelperSet;

class HelperSet extends BaseHelperSet
{
    private ?Command $command = null;

    public function setCommand(?Command $command): void
    {
        $this->command = $command;
    }

    public function getCommand(): ?Command
    {
        return $this->command;
    }
}
