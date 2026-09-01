<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Issue949\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\Issue949\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\Issue949\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProjectProposalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\JsonSchema\Tests\Expected\Issue949\Model\ProjectProposal::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Issue949\Model\ProjectProposal;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\JsonSchema\Tests\Expected\Issue949\Model\ProjectProposal();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $value = $data['name'];
            if (is_string($data['name'])) {
                $value = $data['name'];
            } elseif (is_null($data['name'])) {
                $value = $data['name'];
            }
            $object->name = $value;
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->name = null;
        }
        if (\array_key_exists('ecoScore', $data) && $data['ecoScore'] !== null) {
            $value_1 = $data['ecoScore'];
            if (is_array($data['ecoScore']) and \array_key_exists('emission_factors', $data['ecoScore']) and \array_key_exists('tracingId', $data['ecoScore'])) {
                $value_1 = $this->denormalizer->denormalize($data['ecoScore'], \Jane\Component\JsonSchema\Tests\Expected\Issue949\Model\GlobalEcoScore::class, 'json', $context);
            } elseif (is_null($data['ecoScore'])) {
                $value_1 = $data['ecoScore'];
            }
            $object->ecoScore = $value_1;
        }
        elseif (\array_key_exists('ecoScore', $data) && $data['ecoScore'] === null) {
            $object->ecoScore = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->id ?? null;
        $value = $data->name ?? null;
        if (is_string($data->name ?? null)) {
            $value = $data->name ?? null;
        } elseif (is_null($data->name ?? null)) {
            $value = $data->name ?? null;
        }
        $dataArray['name'] = $value;
        $value_1 = $data->ecoScore ?? null;
        if (is_object($data->ecoScore ?? null)) {
            $value_1 = ($data->ecoScore ?? null) === null ? null : new \Jane\Component\JsonSchema\Tests\Expected\Issue949\Runtime\JsonObject($this->normalizer->normalize($data->ecoScore ?? null, 'json', $context));
        } elseif (is_null($data->ecoScore ?? null)) {
            $value_1 = $data->ecoScore ?? null;
        }
        $dataArray['ecoScore'] = $value_1;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\Issue949\Model\ProjectProposal::class => false];
    }
}