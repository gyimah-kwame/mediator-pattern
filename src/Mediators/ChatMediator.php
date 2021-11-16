<?php

namespace Kwame\Demo\Mediators;

use Kwame\Demo\Colleagues\User;

interface ChatMediator
 {

    public function sendMessage(String $msg, User $user): void;

	public function addUser(User $user): void;

}
