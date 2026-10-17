<?php

namespace Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ReactionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Model\Reactions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Model\Reactions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Model\Reactions();
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
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Validator\ReactionsConstraint());
        }
        if (\array_key_exists('+1', $data)) {
            $object->n1 = $data['+1'];
            unset($data['+1']);
        }
        if (\array_key_exists('-1', $data)) {
            $object->n12 = $data['-1'];
            unset($data['-1']);
        }
        if (\array_key_exists('labels', $data) && $data['labels'] !== null) {
            $value = $data['labels'];
            if (is_null($data['labels'])) {
                $value = $data['labels'];
            } else {
                $value = $data['labels'];
            }
            $object->labels = $value;
            unset($data['labels']);
        }
        elseif (\array_key_exists('labels', $data)) {
            $object->labels = null;
            unset($data['labels']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['+1'] = $data->n1;
        $dataArray['-1'] = $data->n12;
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $value = $data->labels;
            if (is_null($data->labels)) {
                $value = $data->labels;
            } elseif (!is_null($data->labels)) {
                $value = $data->labels;
            }
            $dataArray['labels'] = $value;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Validator\ReactionsConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Model\Reactions::class => false];
    }
}