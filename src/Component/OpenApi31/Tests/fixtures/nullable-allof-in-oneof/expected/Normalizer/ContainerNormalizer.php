<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ContainerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\Model\Container::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\Model\Container::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\Model\Container();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\Validator\ContainerConstraint());
        }
        if (\array_key_exists('iconOneOf', $data) && $data['iconOneOf'] !== null) {
            $value = $data['iconOneOf'];
            if (is_array($data['iconOneOf'])) {
                $value = $this->denormalizer->denormalize($data['iconOneOf'], \Jane\Component\OpenApi31\Tests\Expected\Model\Image::class, 'json', $context);
            } elseif (is_null($data['iconOneOf'])) {
                $value = $data['iconOneOf'];
            }
            $object->iconOneOf = $value;
            unset($data['iconOneOf']);
        }
        elseif (\array_key_exists('iconOneOf', $data) && $data['iconOneOf'] === null) {
            $object->iconOneOf = null;
            unset($data['iconOneOf']);
        }
        if (\array_key_exists('iconAnyOf', $data) && $data['iconAnyOf'] !== null) {
            $value_1 = $data['iconAnyOf'];
            if (is_array($data['iconAnyOf'])) {
                $value_1 = $this->denormalizer->denormalize($data['iconAnyOf'], \Jane\Component\OpenApi31\Tests\Expected\Model\ContainerIconAnyOfAnyOf::class, 'json', $context);
            } elseif (is_null($data['iconAnyOf'])) {
                $value_1 = $data['iconAnyOf'];
            }
            $object->iconAnyOf = $value_1;
            unset($data['iconAnyOf']);
        }
        elseif (\array_key_exists('iconAnyOf', $data) && $data['iconAnyOf'] === null) {
            $object->iconAnyOf = null;
            unset($data['iconAnyOf']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('iconOneOf', get_object_vars($data)) && null !== ($data->iconOneOf ?? null)) {
            $value = $data->iconOneOf ?? null;
            if (is_object($data->iconOneOf ?? null)) {
                $value = ($data->iconOneOf ?? null) === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->iconOneOf ?? null, 'json', $context));
            } elseif (is_null($data->iconOneOf ?? null)) {
                $value = $data->iconOneOf ?? null;
            }
            $dataArray['iconOneOf'] = $value;
        }
        if (array_key_exists('iconAnyOf', get_object_vars($data)) && null !== ($data->iconAnyOf ?? null)) {
            $value_1 = $data->iconAnyOf ?? null;
            if (is_object($data->iconAnyOf ?? null)) {
                $value_1 = ($data->iconAnyOf ?? null) === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->iconAnyOf ?? null, 'json', $context));
            } elseif (is_null($data->iconAnyOf ?? null)) {
                $value_1 = $data->iconAnyOf ?? null;
            }
            $dataArray['iconAnyOf'] = $value_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\Validator\ContainerConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\Model\Container::class => false];
    }
}