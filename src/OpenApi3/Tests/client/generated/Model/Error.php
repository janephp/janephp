<?php

namespace Jane\OpenApi3\Tests\Client\PetStore\Model;

class Error
{
    /**
     * @var int
     */
    protected $code;
    /**
     * @var string
     */
    protected $message;

    public function getCode(): int
    {
        return $this->code;
    }

    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
