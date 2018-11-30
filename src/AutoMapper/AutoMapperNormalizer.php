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
        if (!\is_object($data)) {
            return false;
        }

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
        $circularReferenceLimit = 1;

        if (isset($serializerContext[AbstractNormalizer::CIRCULAR_REFERENCE_LIMIT]) && \is_int($serializerContext[AbstractNormalizer::CIRCULAR_REFERENCE_LIMIT])) {
            $circularReferenceLimit = $serializerContext[AbstractNormalizer::CIRCULAR_REFERENCE_LIMIT];
        }

        $context = new Context(
            $serializerContext[AbstractNormalizer::GROUPS] ?? null,
            $serializerContext[AbstractNormalizer::ATTRIBUTES] ?? null,
            $serializerContextContext['ignored_attributes'] ?? null
        );

        $context->setCircularReferenceLimit($circularReferenceLimit);
        $context->setObjectToPopulate($serializerContext[AbstractNormalizer::OBJECT_TO_POPULATE] ?? null);
        $context->setCircularReferenceHandler($serializerContext['circular_reference_handler'] ?? null); // AbstractNormalizer::CIRCULAR_REFERENCE_HANDLER

        // AbstractNormalizer::DEFAULT_CONSTRUCTOR_ARGUMENTS

        return $context;
    }
}
