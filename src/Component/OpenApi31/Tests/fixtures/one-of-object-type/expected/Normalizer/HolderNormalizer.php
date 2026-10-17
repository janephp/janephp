<?php

namespace Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class HolderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Model\Holder::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Model\Holder::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Model\Holder();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('primitive', $data)) {
            $value = $data['primitive'];
            if (is_int($data['primitive'])) {
                $value = $data['primitive'];
            } elseif (is_string($data['primitive'])) {
                $value = $data['primitive'];
            }
            $object->primitive = $value;
            unset($data['primitive']);
        }
        if (\array_key_exists('entity', $data)) {
            $value_1 = $data['entity'];
            if (is_array($data['entity'])) {
                $value_1 = $this->denormalizer->denormalize($data['entity'], \Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Model\TypeOne::class, 'json', $context);
            } elseif (is_array($data['entity'])) {
                $value_1 = $this->denormalizer->denormalize($data['entity'], \Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Model\TypeTwo::class, 'json', $context);
            }
            $object->entity = $value_1;
            unset($data['entity']);
        }
        if (\array_key_exists('entityReference', $data)) {
            $value_2 = $data['entityReference'];
            if (is_array($data['entityReference'])) {
                $value_2 = $this->denormalizer->denormalize($data['entityReference'], \Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Model\TypeOne::class, 'json', $context);
            } elseif (is_array($data['entityReference'])) {
                $value_2 = $this->denormalizer->denormalize($data['entityReference'], \Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Model\TypeTwo::class, 'json', $context);
            }
            $object->entityReference = $value_2;
            unset($data['entityReference']);
        }
        if (\array_key_exists('primitiveEntityReference', $data)) {
            $value_3 = $data['primitiveEntityReference'];
            if (is_int($data['primitiveEntityReference'])) {
                $value_3 = $data['primitiveEntityReference'];
            } elseif (is_string($data['primitiveEntityReference'])) {
                $value_3 = $data['primitiveEntityReference'];
            }
            $object->primitiveEntityReference = $value_3;
            unset($data['primitiveEntityReference']);
        }
        if (\array_key_exists('inlineObjects', $data)) {
            $object->inlineObjects = $data['inlineObjects'];
            unset($data['inlineObjects']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('primitive', get_object_vars($data)) && null !== ($data->primitive ?? null)) {
            $value = $data->primitive;
            if (is_int($data->primitive)) {
                $value = $data->primitive;
            } elseif (is_string($data->primitive)) {
                $value = $data->primitive;
            }
            $dataArray['primitive'] = $value;
        }
        if (array_key_exists('entity', get_object_vars($data)) && null !== ($data->entity ?? null)) {
            $value_1 = $data->entity;
            if (is_object($data->entity)) {
                $normalized = $this->normalizer->normalize($data->entity, 'json', $context);
                $value_1 = \is_iterable($normalized) ? new \Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Runtime\JsonObject($normalized) : $normalized;
            } elseif (is_object($data->entity)) {
                $normalized_1 = $this->normalizer->normalize($data->entity, 'json', $context);
                $value_1 = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['entity'] = $value_1;
        }
        if (array_key_exists('entityReference', get_object_vars($data)) && null !== ($data->entityReference ?? null)) {
            $value_2 = $data->entityReference;
            if (is_object($data->entityReference)) {
                $normalized_2 = $this->normalizer->normalize($data->entityReference, 'json', $context);
                $value_2 = \is_iterable($normalized_2) ? new \Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Runtime\JsonObject($normalized_2) : $normalized_2;
            } elseif (is_object($data->entityReference)) {
                $normalized_3 = $this->normalizer->normalize($data->entityReference, 'json', $context);
                $value_2 = \is_iterable($normalized_3) ? new \Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Runtime\JsonObject($normalized_3) : $normalized_3;
            }
            $dataArray['entityReference'] = $value_2;
        }
        if (array_key_exists('primitiveEntityReference', get_object_vars($data)) && null !== ($data->primitiveEntityReference ?? null)) {
            $value_3 = $data->primitiveEntityReference;
            if (is_int($data->primitiveEntityReference)) {
                $value_3 = $data->primitiveEntityReference;
            } elseif (is_string($data->primitiveEntityReference)) {
                $value_3 = $data->primitiveEntityReference;
            }
            $dataArray['primitiveEntityReference'] = $value_3;
        }
        if (array_key_exists('inlineObjects', get_object_vars($data)) && null !== ($data->inlineObjects ?? null)) {
            $dataArray['inlineObjects'] = $data->inlineObjects;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Model\Holder::class => false];
    }
}