<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\String_;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\ObjectCheckTrait;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class MinLengthValidator implements ValidatorInterface
{
    use ObjectCheckTrait;

    public function supports($object): bool
    {
        return $this->checkObject($object) && ((\is_array($object->getType()) ? \in_array('string', $object->getType()) : 'string' === $object->getType()) || null === $object->getType()) && null !== $object->getMinLength();
    }

    /**
     * @param JsonSchema          $object
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        $guess->addValidatorGuess(new ValidatorGuess(Length::class, [
            'min' => $object->getMinLength(),
            'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.',
        ]));
        if ($object->getMinLength() > 0) {
            $nullable = false;

            if (\get_class($object) === JsonSchema::class) {
                $nullable = \is_array($object->getType()) ? \in_array('null', $object->getType()) : 'null' === $object->getType();
            }
            if (\get_class($object) === 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Schema') {
                $nullable = $object->offsetExists('x-nullable') && \is_bool($object->offsetGet('x-nullable')) && $object->offsetGet('x-nullable');
            }
            if (\get_class($object) === 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema') {
                $nullable = method_exists($object, 'getNullable') && $object->getNullable() ?? false;
            }

            $options = [];
            if ($nullable === true) {
                // Using an integer as a replacement boolean value is most likely to break as soon as
                // \Symfony\Component\Validator\Constraints\NotBlank::$allowNull is strongly typed.
                // Currently we can not use 'bool' here, because \Jane\Component\JsonSchema\Generator\ValidatorGenerator::generateConstraint()
                // does not handle them. This seems to be an issue with nikic/php-parser not being able to provide support
                // for it.
                $options = ['allowNull' => 1];
            }
            $guess->addValidatorGuess(new ValidatorGuess(NotBlank::class, $options));
        }
    }
}
