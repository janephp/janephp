<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

/**
 * Marker interface for guesses that represent types without properties (e.g. enums).
 *
 * Classes implementing this interface will be skipped during property guessing,
 * model generation, normalizer generation, and validator generation.
 */
interface NonObjectGuessInterface
{
}
