<?php

namespace Jane\Component\OpenApi31\Tests\Expected\CustomValidators\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\CustomValidators\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\CustomValidators\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PriceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\CustomValidators\Model\Price::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\CustomValidators\Model\Price::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\CustomValidators\Model\Price();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('discount', $data) && \is_int($data['discount'])) {
            $data['discount'] = (float) $data['discount'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\CustomValidators\Validator\PriceConstraint());
        }
        if (\array_key_exists('amount', $data)) {
            $object->amount = $data['amount'];
            unset($data['amount']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->currency = $data['currency'];
            unset($data['currency']);
        }
        if (\array_key_exists('discount', $data)) {
            $object->discount = $data['discount'];
            unset($data['discount']);
        }
        if (\array_key_exists('comment', $data)) {
            $object->comment = $data['comment'];
            unset($data['comment']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('amount', get_object_vars($data)) && null !== ($data->amount ?? null)) {
            $dataArray['amount'] = $data->amount ?? null;
        }
        if (array_key_exists('currency', get_object_vars($data)) && null !== ($data->currency ?? null)) {
            $dataArray['currency'] = $data->currency ?? null;
        }
        if (array_key_exists('discount', get_object_vars($data)) && null !== ($data->discount ?? null)) {
            $dataArray['discount'] = $data->discount ?? null;
        }
        if (array_key_exists('comment', get_object_vars($data)) && null !== ($data->comment ?? null)) {
            $dataArray['comment'] = $data->comment ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\CustomValidators\Validator\PriceConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\CustomValidators\Model\Price::class => false];
    }
}