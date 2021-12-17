<?php

namespace Jane\Component\OpenApi2\Generator\Parameter;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\Guesser\GuessClass;
use Jane\Component\OpenApi2\JsonSchema\Model\BodyParameter;
use Jane\Component\OpenApi2\JsonSchema\Model\Schema;
use Jane\Component\OpenApiCommon\Generator\Parameter\ParameterGenerator;
use PhpParser\Node;
use PhpParser\Parser;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class BodyParameterGenerator extends ParameterGenerator
{
    /** @var GuessClass */
    private $guessClass;

    public function __construct(Parser $parser, DenormalizerInterface $denormalizer)
    {
        parent::__construct($parser);

        $this->guessClass = new GuessClass(Schema::class, $denormalizer);
    }

    /**
     * {@inheritdoc}
     *
     * @param BodyParameter $parameter
     */
    public function generateMethodParameter($parameter, Context $context, string $reference): ?Node\Param
    {
        $name = $this->getInflector()->camelize($parameter->getName());

        [$class, $array] = $this->getClass($parameter, $context, $reference);
        $paramType = 1 === \count($class) ? $class[0] : null;

        if ($array) {
            $paramType = 'array';
        }

        return new Node\Param(new Node\Expr\Variable($name), null, null === $paramType ? $paramType : new Node\Name($paramType));
    }

    /**
     * {@inheritdoc}
     *
     * @param BodyParameter $parameter
     */
    public function generateMethodDocParameter($parameter, Context $context, string $reference): string
    {
        [$class, $array] = $this->getClass($parameter, $context, $reference);

        return sprintf(' * @param %s $%s %s', implode('|', $class), $this->getInflector()->camelize($parameter->getName()), $parameter->getDescription() ?: '');
    }

    protected function getClass(BodyParameter $parameter, Context $context, string $reference): array
    {
        $resolvedSchema = null;
        $jsonReference = null;
        $array = false;
        $schema = $parameter->getSchema();

        if ($schema instanceof Reference) {
            [$jsonReference, $resolvedSchema] = $this->guessClass->resolve($schema, Schema::class);
        }

        if ($schema instanceof Schema && 'array' === $schema->getType() && $schema->getItems() instanceof Reference) {
            [$jsonReference, $resolvedSchema] = $this->guessClass->resolve($schema->getItems(), Schema::class);
            $array = true;
        }

        if (null === $resolvedSchema) {
            if ($context->getRegistry()->hasClass($reference)) {
                return [['\\' . $context->getRegistry()->getSchema($reference)->getNamespace() . '\\Model\\' . $context->getRegistry()->getClass($reference)->getName()], false];
            }

            return [$this->convertParameterType($schema->getType(), $schema->getFormat()), null];
        }

        $class = $context->getRegistry()->getClass($jsonReference);

        // Happens when reference resolve to a none object
        if (null === $class) {
            return [$this->convertParameterType($resolvedSchema->getType(), $resolvedSchema->getFormat()), null];
        }

        $class = '\\' . $context->getRegistry()->getSchema($jsonReference)->getNamespace() . '\\Model\\' . $class->getName();

        if ($array) {
            $class .= '[]';
        }

        return [[$class], $array];
    }

    private function convertParameterType(string $type, ?string $format = null): array
    {
        if (null === $format) {
            $format = 'default';
        }

        $convertArray = [
            'string' => [
                'default' => ['string'],
                'binary' => ['string', 'resource', '\\' . StreamInterface::class],
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
                'default' => ['string', 'resource', '\\' . StreamInterface::class],
            ],
        ];

        if (!isset($convertArray[$type]) || !isset($convertArray[$type][$format])) {
            return ['mixed'];
        }

        return $convertArray[$type][$format];
    }
}
