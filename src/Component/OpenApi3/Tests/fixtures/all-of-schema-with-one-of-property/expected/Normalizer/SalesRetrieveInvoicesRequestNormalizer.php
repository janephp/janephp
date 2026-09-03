<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AllOfSchemaWithOneOfProperty\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\AllOfSchemaWithOneOfProperty\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\AllOfSchemaWithOneOfProperty\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SalesRetrieveInvoicesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\AllOfSchemaWithOneOfProperty\Model\SalesRetrieveInvoicesRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\AllOfSchemaWithOneOfProperty\Model\SalesRetrieveInvoicesRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\AllOfSchemaWithOneOfProperty\Model\SalesRetrieveInvoicesRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $object->filter = $this->denormalizer->denormalize($data['filter'], \Jane\Component\OpenApi3\Tests\Expected\AllOfSchemaWithOneOfProperty\Model\SalesRetrieveInvoicesRequestFilter::class, 'json', $context);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->filter = null;
        }
        if (\array_key_exists('discriminator', $data)) {
            $object->discriminator = $data['discriminator'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('filter', get_object_vars($data)) && null !== ($data->filter ?? null)) {
            $dataArray['filter'] = ($data->filter ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\AllOfSchemaWithOneOfProperty\Runtime\JsonObject($this->normalizer->normalize($data->filter ?? null, 'json', $context));
        }
        $dataArray['discriminator'] = $data->discriminator ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\AllOfSchemaWithOneOfProperty\Model\SalesRetrieveInvoicesRequest::class => false];
    }
}