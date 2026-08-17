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
class ProjectProposalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\JsonSchema\Tests\Expected\Model\ProjectProposal::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\ProjectProposal;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\ProjectProposal();
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
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $value = $data['name'];
            if (is_string($data['name'])) {
                $value = $data['name'];
            } elseif (is_null($data['name'])) {
                $value = $data['name'];
            }
            $object->setName($value);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('ecoScore', $data) && $data['ecoScore'] !== null) {
            $value_1 = $data['ecoScore'];
            if (is_array($data['ecoScore']) and \array_key_exists('emission_factors', $data['ecoScore']) and \array_key_exists('tracingId', $data['ecoScore'])) {
                $value_1 = $this->denormalizer->denormalize($data['ecoScore'], \Jane\Component\JsonSchema\Tests\Expected\Model\GlobalEcoScore::class, 'json', $context);
            } elseif (is_null($data['ecoScore'])) {
                $value_1 = $data['ecoScore'];
            }
            $object->setEcoScore($value_1);
        }
        elseif (\array_key_exists('ecoScore', $data) && $data['ecoScore'] === null) {
            $object->setEcoScore(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $value = $data->getName();
        if (is_string($data->getName())) {
            $value = $data->getName();
        } elseif (is_null($data->getName())) {
            $value = $data->getName();
        }
        $dataArray['name'] = $value;
        $value_1 = $data->getEcoScore();
        if (is_object($data->getEcoScore())) {
            $value_1 = $this->normalizer->normalize($data->getEcoScore(), 'json', $context);
        } elseif (is_null($data->getEcoScore())) {
            $value_1 = $data->getEcoScore();
        }
        $dataArray['ecoScore'] = $value_1;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\Model\ProjectProposal::class => false];
    }
}