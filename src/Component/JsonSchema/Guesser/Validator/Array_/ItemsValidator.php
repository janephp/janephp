<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\Array_;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\ObjectCheckTrait;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuessCollector;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\NotNull;

class ItemsValidator implements ValidatorInterface
{
    use ObjectCheckTrait;

    public function __construct(
        private readonly ValidatorInterface $chainValidator,
    ) {
    }

    public function supports($object): bool
    {
        if (!$this->checkObject($object)) {
            return false;
        }

        $type = $object->getType();
        $isArray = \is_array($type) ? \in_array('array', $type) : 'array' === $type;

        return $isArray && \is_object($object->getItems()) && $this->checkObject($object->getItems());
    }

    /**
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        $collector = new ValidatorGuessCollector();

        $this->chainValidator->guess($object->getItems(), $name, $collector);

        $constraints = array_filter(
            $collector->getValidatorGuesses(),
            static fn (ValidatorGuess $g) => NotNull::class !== $g->getConstraintClass(),
        );

        if (\count($constraints) > 0) {
            $guess->addValidatorGuess(new ValidatorGuess(All::class, [
                'constraints' => array_values($constraints),
            ]));
        }
    }
}
