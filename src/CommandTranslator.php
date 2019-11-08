<?php 

namespace Core\Contracts;

use Core\Contracts\Command;

interface CommandTranslator
{
	/**
	 * Translate command class name to handler class name.
	 * @param  Command $command 
	 * @return string           
	 */
	public function translate(Command $command);
}