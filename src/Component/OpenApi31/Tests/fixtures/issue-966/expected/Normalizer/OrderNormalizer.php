<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue966\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\Issue966\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\Issue966\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class OrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\Issue966\Model\Order::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\Issue966\Model\Order::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\Issue966\Model\Order();
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
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\Issue966\Validator\OrderConstraint());
        }
        if (\array_key_exists('product_data', $data)) {
            $object->productData = $this->denormalizer->denormalize($data['product_data'], \Jane\Component\OpenApi31\Tests\Expected\Issue966\Model\OrderProductData::class, 'json', $context);
            unset($data['product_data']);
        }
        if (\array_key_exists('product', $data)) {
            $object->product = $this->denormalizer->denormalize($data['product'], \Jane\Component\OpenApi31\Tests\Expected\Issue966\Model\OrderProduct::class, 'json', $context);
            unset($data['product']);
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
        if (array_key_exists('productData', get_object_vars($data)) && null !== ($data->productData ?? null)) {
            $dataArray['product_data'] = ($data->productData ?? null) === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\Issue966\Runtime\JsonObject($this->normalizer->normalize($data->productData ?? null, 'json', $context));
        }
        if (array_key_exists('product', get_object_vars($data)) && null !== ($data->product ?? null)) {
            $dataArray['product'] = ($data->product ?? null) === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\Issue966\Runtime\JsonObject($this->normalizer->normalize($data->product ?? null, 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\Issue966\Validator\OrderConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\Issue966\Model\Order::class => false];
    }
}