<?php

namespace Jane\Component\JsonSchema\Guesser;

trait ChainGuesserAwareTrait
{
    /**
     * @var ChainGuesser
     */
    protected $chainGuesser;

    /**
     * Set the chain guesser.
     */
    public function setChainGuesser(ChainGuesser $chainGuesser)
    {
        $this->chainGuesser = $chainGuesser;
    }
}
