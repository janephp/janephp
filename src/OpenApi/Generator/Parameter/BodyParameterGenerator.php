<?php

namespace Jane\OpenApi\Generator\Parameter;

use Doctrine\Common\Inflector\Inflector;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi\Model\BodyParameter;
use Jane\OpenApi\Model\Schema;
use PhpParser\Node;
use PhpParser\Parser;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class BodyParameterGenerator extends ParameterGenerator
{
    /**
     * @var DenormalizerInterface
     */
    private $denormalizer;

    public function __construct(Parser $parser, DenormalizerInterface $denormalizer)
    {
        parent::__construct($parser);

        $this->denormalizer = $denormalizer;
    }

    /**
     * {@inheritDoc}
     *
     * @param $parameter BodyParameter
     */
    public function generateMethodParameter($parameter, Context $context, $reference)
    {
        $name = Inflector::camelize($parameter->getName());

        list($class, $array) = $this->getClass($parameter, $context, $reference);

        if (null === $array || true === $array) {
            if ($class == "array") {
                return new Node\Param($name, null, "array");
            }

            return new Node\Param($name);
        }

        return new Node\Param($name, null, $class);
    }

    /**
     * {@inheritDoc}
     *
     * @param $parameter BodyParameter
     */
    public function generateDocParameter($parameter, Context $context, $reference)
    {
        list($class, $array) = $this->getClass($parameter, $context, $reference);

        if (null === $class) {
            return sprintf('%s $%s %s', 'mixed', Inflector::camelize($parameter->getName()), $parameter->getDescription() ?: '');
        }

        return sprintf('%s $%s %s', $class, Inflector::camelize($parameter->getName()), $parameter->getDescription() ?: '');
    }

    /**
     * @param BodyParameter $parameter
     * @param Context $context
     *
     * @return array
     */
    protected function getClass(BodyParameter $parameter, Context $context, $reference)
    {
        $resolvedSchema = null;
        $jsonReference  = null;
        $array          = false;
        $schema         = $parameter->getSchema();

        if ($schema instanceof Reference) {
            list($jsonReference, $resolvedSchema) = $this->resolveSchema($schema, Schema::class);
        }

        if ($schema instanceof Schema && $schema->getType() == "array" && $schema->getItems() instanceof Reference) {
            list($jsonReference, $resolvedSchema) = $this->resolveSchema($schema->getItems(), Schema::class);
            $array          = true;
        }

        if ($resolvedSchema === null) {
            if ($context->getRegistry()->hasClass($reference)) {
                return ["\\" . $context->getRegistry()->getSchema($reference)->getNamespace() . "\\Model\\" . $context->getRegistry()->getClass($reference)->getName(), false];
            }

            return [$schema->getType(), null];
        }

        $class = $context->getRegistry()->getClass($jsonReference);

        // Happens when reference resolve to a none object
        if ($class === null) {
            return [$schema->getType(), null];
        }

        $class = "\\" . $context->getRegistry()->getSchema($jsonReference)->getNamespace() . "\\Model\\" . $class->getName();

        if ($array) {
            $class .= "[]";
        }

        return [$class, $array];
    }

    /**
     * @param Reference $reference
     * @param $class
     *
     * @return mixed
     */
    private function resolveSchema(Reference $reference, $class)
    {
        $result    = $reference;

        do {
            $refString = (string) $reference->getMergedUri();
            $result = $result->resolve(function ($data) use($result, $class) {
                return $this->denormalizer->denormalize($data, $class, 'json', [
                    'document-origin' => (string) $result->getMergedUri()->withFragment('')
                ]);
            });
        } while ($result instanceof Reference);

        return [$refString, $result];
    }
}
