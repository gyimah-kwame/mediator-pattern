<?php

namespace Kwame\Demo\Colleagues;

use Kwame\Demo\Mediators\ChatMediator;

class UserImp extends User
{

    public function __construct(ChatMediator $mediator, int $id, string $name)
    {
        parent::__construct($mediator, $id, $name);
    }
    
	/**
	 *
	 * @param string $msg 
	 */
	function send(string $msg): void
    {
        echo "$this->name: Sending message = $msg\n\n";
        $this->mediator->sendMessage($msg, $this);
	}
	
	/**
	 *
	 * @param string $msg 
	 */
	function receive(string $msg): void 
    {
        echo "$this->name: Received message= $msg\n";
	}
}