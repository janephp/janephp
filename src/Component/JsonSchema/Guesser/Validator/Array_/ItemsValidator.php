<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\Array_;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\ObjectCheckTrait;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\DivisibleBy;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\Hostname;
use Symfony\Component\Validator\Constraints\Ip;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\LessThan;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\Uuid;

class ItemsValidator implements ValidatorInterface
{
    use ObjectCheckTrait;

    private const TYPES_MAPPING = [
        'boolean' => 'bool',
        'number' => 'float',
    ];

    public function supports($object): bool
    {
        return $this->checkObject($object) && (\is_array($object->getType()) ? \in_array('array', $object->getType()) : 'array' === $object->getType()) && null !== $object->getItems() && \is_object($object->getItems()) && $this->checkObject($object->getItems());
    }

    /**
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        $items = $object->getItems();
        $innerConstraints = [];

        $this->guessTypeConstraints($items, $innerConstraints);
        $this->guessFormatConstraints($items, $innerConstraints);
        $this->guessEnumConstraints($items, $innerConstraints);
        $this->guessStringConstraints($items, $innerConstraints);
        $this->guessNumericConstraints($items, $innerConstraints);

        if (\count($innerConstraints) > 0) {
            $guess->addValidatorGuess(new ValidatorGuess(All::class, [
                'constraints' => $innerConstraints,
            ]));
        }
    }

    /**
     * @param ValidatorGuess[] $innerConstraints
     */
    private function guessTypeConstraints(object $items, array &$innerConstraints): void
    {
        if (null === $items->getType()) {
            return;
        }

        $types = $items->getType();
        if (\is_string($types)) {
            $types = [$types];
        }

        $types = array_flip($types);
        if (\array_key_exists('object', $types)) {
            return;
        }

        foreach (self::TYPES_MAPPING as $jsonSchemaType => $phpType) {
            if (\array_key_exists($jsonSchemaType, $types)) {
                unset($types[$jsonSchemaType]);
                $types[$phpType] = 1;
            }
        }

        $innerConstraints[] = new ValidatorGuess(Type::class, [
            'type' => array_keys($types),
        ]);
    }

    /**
     * @param ValidatorGuess[] $innerConstraints
     */
    private function guessFormatConstraints(object $items, array &$innerConstraints): void
    {
        $format = $items->getFormat();
        if (null === $format) {
            return;
        }

        switch ($format) {
            case 'uuid':
                $innerConstraints[] = new ValidatorGuess(Uuid::class);
                break;
            case 'email':
                $innerConstraints[] = new ValidatorGuess(Email::class);
                break;
            case 'ipv4':
                $innerConstraints[] = new ValidatorGuess(Ip::class, ['version' => '4']);
                break;
            case 'ipv6':
                $innerConstraints[] = new ValidatorGuess(Ip::class, ['version' => '6']);
                break;
            case 'hostname':
                $innerConstraints[] = new ValidatorGuess(Hostname::class);
                break;
        }
    }

    /**
     * @param ValidatorGuess[] $innerConstraints
     */
    private function guessEnumConstraints(object $items, array &$innerConstraints): void
    {
        if (null === $items->getEnum()) {
            return;
        }

        $innerConstraints[] = new ValidatorGuess(Choice::class, [
            'choices' => $items->getEnum(),
            'message' => '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".',
        ]);
    }

    /**
     * @param ValidatorGuess[] $innerConstraints
     */
    private function guessStringConstraints(object $items, array &$innerConstraints): void
    {
        if (null !== $items->getMinLength()) {
            $innerConstraints[] = new ValidatorGuess(Length::class, [
                'min' => $items->getMinLength(),
                'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.',
            ]);
        }

        if (null !== $items->getMaxLength()) {
            $innerConstraints[] = new ValidatorGuess(Length::class, [
                'max' => $items->getMaxLength(),
                'maxMessage' => 'This value is too long. It should have {{ limit }} characters or less.',
            ]);
        }

        if (null !== $items->getPattern()) {
            $innerConstraints[] = new ValidatorGuess(Regex::class, [
                'pattern' => '#' . $items->getPattern() . '#',
                'message' => 'This value is not valid.',
            ]);
        }
    }

    /**
     * @param ValidatorGuess[] $innerConstraints
     */
    private function guessNumericConstraints(object $items, array &$innerConstraints): void
    {
        if (null !== $items->getMinimum()) {
            $innerConstraints[] = new ValidatorGuess(GreaterThanOrEqual::class, ['value' => $items->getMinimum()]);
        }

        if (null !== $items->getExclusiveMinimum()) {
            $innerConstraints[] = new ValidatorGuess(GreaterThan::class, ['value' => $items->getExclusiveMinimum()]);
        }

        if (null !== $items->getMaximum()) {
            $innerConstraints[] = new ValidatorGuess(LessThanOrEqual::class, ['value' => $items->getMaximum()]);
        }

        if (null !== $items->getExclusiveMaximum()) {
            $innerConstraints[] = new ValidatorGuess(LessThan::class, ['value' => $items->getExclusiveMaximum()]);
        }

        if (null !== $items->getMultipleOf()) {
            $innerConstraints[] = new ValidatorGuess(DivisibleBy::class, ['value' => $items->getMultipleOf()]);
        }
    }
}
