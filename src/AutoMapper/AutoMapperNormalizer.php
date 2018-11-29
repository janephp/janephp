<?php

namespace Jane\AutoMapper;

use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

final class AutoMapperNormalizer implements DenormalizerInterface, NormalizerInterface, CacheableSupportsMethodInterface
{
    private $autoMapper;

    public function __construct(AutoMapperInterface $autoMapper)
    {
        $this->autoMapper = $autoMapper;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $autoMapperContext = $this->createAutoMapperContext($context);

        return $this->autoMapper->map($object, 'array', $autoMapperContext);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $autoMapperContext = $this->createAutoMapperContext($context);

        return $this->autoMapper->map($data, $class, $autoMapperContext);
    }

    public function supportsNormalization($data, $format = null)
    {
        return $this->autoMapper->hasMapper(\get_class($data), 'array');
    }

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $this->autoMapper->hasMapper('array', $type);
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }

    private function createAutoMapperContext(array $serializerContext = []): Context
    {
        $context = new Context($serializerContext[AbstractNormalizer::GROUPS] ?? null);
        $context->setCircularReferenceLimit($serializerContext[AbstractNormalizer::CIRCULAR_REFERENCE_LIMIT] ?? 1);
        $context->setObjectToPopulate($serializerContext[AbstractNormalizer::OBJECT_TO_POPULATE] ?? null);
        $context->setCircularReferenceHandler($serializerContext['circular_reference_handler'] ?? null); // AbstractNormalizer::CIRCULAR_REFERENCE_HANDLER

        // AbstractNormalizer::ATTRIBUTES
        // AbstractNormalizer::DEFAULT_CONSTRUCTOR_ARGUMENTS
        // AbstractNormalizer::IGNORED_ATTRIBUTES

        return $context;
    }
}
