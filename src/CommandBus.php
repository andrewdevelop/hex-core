<?php 

namespace Core\Contracts;

use Core\Contracts\Command;

interface CommandBus
{
	/**
	 * Execute a command.
	 * @param  \Core\Contracts\Command $command 
	 * @return mixed
	 */
    public function execute(Command $command);
}