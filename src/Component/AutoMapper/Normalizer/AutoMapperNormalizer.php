<?php

namespace Jane\Component\AutoMapper\Normalizer;

use Jane\Component\AutoMapper\AutoMapperInterface;
use Jane\Component\AutoMapper\MapperContext;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * Bridge for symfony/serializer.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
class AutoMapperNormalizer implements NormalizerInterface, DenormalizerInterface, CacheableSupportsMethodInterface
{
    private const SERIALIZER_CONTEXT_MAPPING = [
        AbstractNormalizer::GROUPS => MapperContext::GROUPS,
        AbstractNormalizer::ATTRIBUTES => MapperContext::ALLOWED_ATTRIBUTES,
        AbstractNormalizer::IGNORED_ATTRIBUTES => MapperContext::IGNORED_ATTRIBUTES,
        AbstractNormalizer::OBJECT_TO_POPULATE => MapperContext::TARGET_TO_POPULATE,
        AbstractNormalizer::CIRCULAR_REFERENCE_LIMIT => MapperContext::CIRCULAR_REFERENCE_LIMIT,
        AbstractNormalizer::CIRCULAR_REFERENCE_HANDLER => MapperContext::CIRCULAR_REFERENCE_HANDLER,
    ];

    private $autoMapper;

    public function __construct(AutoMapperInterface $autoMapper)
    {
        $this->autoMapper = $autoMapper;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        return $this->autoMapper->map($object, 'array', $this->createAutoMapperContext($context));
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        return $this->autoMapper->map($data, $class, $this->createAutoMapperContext($context));
    }

    public function supportsNormalization($data, $format = null): bool
    {
        if (!\is_object($data) || $data instanceof \stdClass) {
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

    private function createAutoMapperContext(array $serializerContext = []): array
    {
        $context = [];

        foreach (self::SERIALIZER_CONTEXT_MAPPING as $serializerContextName => $autoMapperContextName) {
            $context[$autoMapperContextName] = $serializerContext[$serializerContextName] ?? null;
            unset($serializerContext[$serializerContextName]);
        }

        if (\array_key_exists(AbstractNormalizer::DEFAULT_CONSTRUCTOR_ARGUMENTS, $serializerContext) && is_iterable($serializerContext[AbstractNormalizer::DEFAULT_CONSTRUCTOR_ARGUMENTS])) {
            foreach ($serializerContext[AbstractNormalizer::DEFAULT_CONSTRUCTOR_ARGUMENTS] as $class => $keyArgs) {
                foreach ($keyArgs as $key => $value) {
                    $context[MapperContext::CONSTRUCTOR_ARGUMENTS][$class][$key] = $value;
                }
            }

            unset($serializerContext[AbstractNormalizer::DEFAULT_CONSTRUCTOR_ARGUMENTS]);
        }

        return $context + $serializerContext;
    }
}
