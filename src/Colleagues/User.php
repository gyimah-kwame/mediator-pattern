<?php

namespace Kwame\Demo\Colleagues;

use Kwame\Demo\Mediators\ChatMediator;

abstract class User {

    protected ChatMediator $mediator;
    protected int $id;
	protected string $name;

    public function __construct(ChatMediator $mediator, int $id, string $name)
    {
        $this->mediator = $mediator;
        $this->id = $id;
        $this->name = $name;
    }

	
	public abstract function send(string $msg): void;
	
	public abstract function receive(String $msg): void;

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): int
    {
        return $this->id;
    }

}