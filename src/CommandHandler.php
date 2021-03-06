<?php 

namespace Core\Contracts;

use Core\Contracts\Command;

interface CommandHandler
{
    /**
     * Handle an incoming command.
     * @param  Command $command
     * @return mixed
     */	
	public function handle(Command $command);
}