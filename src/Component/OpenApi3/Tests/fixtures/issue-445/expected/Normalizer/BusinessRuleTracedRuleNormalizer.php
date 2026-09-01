<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BusinessRuleTracedRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessRuleTracedRule::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessRuleTracedRule::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessRuleTracedRule();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('configuration', $data) && $data['configuration'] !== null) {
            $value = $data['configuration'];
            if (is_array($data['configuration']) and \array_key_exists('isEnabled', $data['configuration']) and \array_key_exists('enableTracing', $data['configuration']) and \array_key_exists('kind', $data['configuration'])) {
                $value = $this->denormalizer->denormalize($data['configuration'], \PicturePark\API\Model\BusinessRule::class, 'json', $context);
            }
            $object->configuration = $value;
        }
        elseif (\array_key_exists('configuration', $data) && $data['configuration'] === null) {
            $object->configuration = null;
        }
        if (\array_key_exists('evaluations', $data) && $data['evaluations'] !== null) {
            $values = [];
            foreach ($data['evaluations'] as $value_1) {
                $values[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\BusinessRuleTracedEvaluation::class, 'json', $context);
            }
            $object->evaluations = $values;
        }
        elseif (\array_key_exists('evaluations', $data) && $data['evaluations'] === null) {
            $object->evaluations = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('configuration', get_object_vars($data)) && null !== ($data->configuration ?? null)) {
            $value = $data->configuration ?? null;
            if (is_object($data->configuration ?? null)) {
                $value = ($data->configuration ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->configuration ?? null, 'json', $context));
            }
            $dataArray['configuration'] = $value;
        }
        if (array_key_exists('evaluations', get_object_vars($data)) && null !== ($data->evaluations ?? null)) {
            $values = [];
            foreach ($data->evaluations ?? null as $value_1) {
                $values[] = $value_1 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['evaluations'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessRuleTracedRule::class => false];
    }
}