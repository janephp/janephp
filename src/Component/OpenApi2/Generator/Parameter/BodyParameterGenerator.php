<?php

namespace Jane\Component\OpenApi2\Generator\Parameter;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\Guesser\GuessClass;
use Jane\Component\OpenApi2\JsonSchema\Model\BodyParameter;
use Jane\Component\OpenApi2\JsonSchema\Model\Schema;
use Jane\Component\OpenApiCommon\Generator\Parameter\ParameterGenerator;
use PhpParser\Node;
use PhpParser\Parser;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class BodyParameterGenerator extends ParameterGenerator
{
    private GuessClass $guessClass;

    public function __construct(Parser $parser, DenormalizerInterface $denormalizer)
    {
        parent::__construct($parser);

        $this->guessClass = new GuessClass(Schema::class, $denormalizer);
    }

    /**
     * @param BodyParameter $parameter
     */
    public function generateMethodParameter($parameter, Context $context, string $reference): ?Node\Param
    {
        $name = $this->getInflector()->camelize($parameter->name ?? null);

        $guessedType = $this->getClass($parameter, $context, $reference);
        if (false === $guessedType) {
            $paramType = 'mixed';
        } else {
            [$class, $array] = $guessedType;
            $paramType = \count($class) === 1 ? $class[0] : null;

            if ($array) {
                $paramType = 'array';
            }
        }

        return new Node\Param(new Node\Expr\Variable($name), null, null === $paramType ? $paramType : new Node\Name($paramType));
    }

    /**
     * @param BodyParameter $parameter
     */
    public function generateMethodDocParameter($parameter, Context $context, string $reference): string
    {
        $guessedType = $this->getClass($parameter, $context, $reference);
        if (false === $guessedType) {
            $class = ['mixed'];
        } else {
            [$class] = $guessedType;
        }

        return rtrim(\sprintf(' * @param %s $%s %s', implode('|', $class), str_replace('*/', '*\\/', $this->getInflector()->camelize($parameter->name ?? null)), str_replace('*/', '*\\/', ($parameter->description ?? null) ?: '')));
    }

    /**
     * @return array{0: string[], 1: bool}
     */
    protected function getClass(BodyParameter $parameter, Context $context, string $reference): false|array
    {
        $resolvedSchema = $jsonReference = null;
        $array = false;
        $schema = ($parameter->schema ?? null);

        if ($schema instanceof Reference) {
            list($jsonReference, $resolvedSchema) = $this->guessClass->resolve($schema, Schema::class);
        }

        if ($schema instanceof Schema && 'array' === $schema->type && $schema->items instanceof Reference) {
            list($jsonReference, $resolvedSchema) = $this->guessClass->resolve($schema->items, Schema::class);
            $array = true;
        }

        if (null === $resolvedSchema) {
            if ($context->getRegistry()->hasClass($reference)) {
                $classGuess = $context->getRegistry()->getClass($reference);

                return [['\\' . $this->getModelNamespace($context, $reference, $classGuess) . $classGuess->getName()], false];
            }

            return [$this->convertParameterType($schema->type, $schema->format ?? null), false];
        }

        $class = $context->getRegistry()->getClass($jsonReference);

        // Happens when reference resolve to a none object
        if (null === $class) {
            if ([] !== ($resolvedSchema->allOf ?? null ?? [])) {
                return false;
            }

            return [$this->convertParameterType($resolvedSchema->type, $resolvedSchema->format ?? null), false];
        }

        $class = '\\' . $this->getModelNamespace($context, $jsonReference, $class) . $class->getName();

        if ($array) {
            $class .= '[]';
        }

        return [[$class], $array];
    }

    /**
     * Computes the model namespace (schema namespace + "Model" + sub-namespace of the guessed class).
     */
    private function getModelNamespace(Context $context, string $reference, ?BaseClassGuess $classGuess): string
    {
        $subNamespace = null !== $classGuess ? $classGuess->getSubNamespace() : [];
        $suffix = [] === $subNamespace ? '\\Model\\' : '\\Model\\' . implode('\\', $subNamespace) . '\\';

        return $context->getRegistry()->getSchema($reference)->getNamespace() . $suffix;
    }

    private function convertParameterType(string $type, ?string $format = null): array
    {
        if (null === $format) {
            $format = 'default';
        }

        $convertArray = [
            'string' => [
                'default' => ['string'],
                'binary' => ['string', 'resource'],
            ],
            'number' => [
                'default' => ['float'],
            ],
            'boolean' => [
                'default' => ['bool'],
            ],
            'integer' => [
                'default' => ['int'],
            ],
            'array' => [
                'default' => ['array'],
            ],
            'object' => [
                'default' => ['\\stdClass'],
            ],
            'file' => [
                'default' => ['string', 'resource'],
            ],
        ];

        if (!isset($convertArray[$type]) || !isset($convertArray[$type][$format])) {
            return ['mixed'];
        }

        return $convertArray[$type][$format];
    }
}
