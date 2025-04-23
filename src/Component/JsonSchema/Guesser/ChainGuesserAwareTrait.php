<?php

namespace Jane\Component\JsonSchema\Guesser;

trait ChainGuesserAwareTrait
{
    protected ChainGuesser $chainGuesser;

    /**
     * Set the chain guesser.
     */
    public function setChainGuesser(ChainGuesser $chainGuesser): void
    {
        $this->chainGuesser = $chainGuesser;
    }
}
