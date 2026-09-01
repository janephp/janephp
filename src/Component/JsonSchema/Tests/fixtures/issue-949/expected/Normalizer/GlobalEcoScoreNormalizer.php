<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GlobalEcoScoreNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\JsonSchema\Tests\Expected\Model\GlobalEcoScore::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\GlobalEcoScore;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\GlobalEcoScore();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('emission_factors', $data) && $data['emission_factors'] !== null) {
            $value = $data['emission_factors'];
            if (is_array($data['emission_factors']) && $this->isOnlyNumericKeys($data['emission_factors'])) {
                $values = [];
                foreach ($data['emission_factors'] as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (is_null($data['emission_factors'])) {
                $value = $data['emission_factors'];
            }
            $object->emissionFactors = $value;
        }
        elseif (\array_key_exists('emission_factors', $data) && $data['emission_factors'] === null) {
            $object->emissionFactors = null;
        }
        if (\array_key_exists('tracingId', $data)) {
            $object->tracingId = $data['tracingId'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $value = $data->emissionFactors ?? null;
        if (is_array($data->emissionFactors ?? null)) {
            $values = [];
            foreach ($data->emissionFactors ?? null as $value_1) {
                $values[] = $value_1;
            }
            $value = $values;
        } elseif (is_null($data->emissionFactors ?? null)) {
            $value = $data->emissionFactors ?? null;
        }
        $dataArray['emission_factors'] = $value;
        $dataArray['tracingId'] = $data->tracingId ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\Model\GlobalEcoScore::class => false];
    }
}