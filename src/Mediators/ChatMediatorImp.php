<?php

namespace Kwame\Demo\Mediators;

use Kwame\Demo\Colleagues\User;
use Kwame\Demo\Mediators\ChatMediator;

class ChatMediatorImp implements ChatMediator 
{

    private array $users;

    public function __construct()
    {
        $this->users = [];
    }


	/**
	 *
	 * @param string $msg 
	 * @param User $user 
	 *
	 * @return void
	 */
	function sendMessage(string $message, User $user): void
    {
        foreach($this->users as $member)
        {
            if($member->getId() != $user->getId())
            {
                $member->receive($message);
            }
        }
	}
	
	/**
	 *
	 * @param User $user 
	 *
	 * @return void
	 */
	function addUser(User $user): void 
    {
        $this->users[] = $user;
	}
}