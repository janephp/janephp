<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ApmodelLanPortAuthenticatorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLanPortAuthenticator::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLanPortAuthenticator::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLanPortAuthenticator();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('disabledAccounting', $data) && \is_int($data['disabledAccounting'])) {
            $data['disabledAccounting'] = (bool) $data['disabledAccounting'];
        }
        if (\array_key_exists('macAuthByPassEnabled', $data) && \is_int($data['macAuthByPassEnabled'])) {
            $data['macAuthByPassEnabled'] = (bool) $data['macAuthByPassEnabled'];
        }
        if (\array_key_exists('authentication', $data)) {
            $object->authentication = $this->denormalizer->denormalize($data['authentication'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelAuthenticatorAAAServer::class, 'json', $context);
        }
        if (\array_key_exists('disabledAccounting', $data)) {
            $object->disabledAccounting = $data['disabledAccounting'];
        }
        if (\array_key_exists('accounting', $data)) {
            $object->accounting = $this->denormalizer->denormalize($data['accounting'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelAuthenticatorAAAServer::class, 'json', $context);
        }
        if (\array_key_exists('macAuthByPassEnabled', $data)) {
            $object->macAuthByPassEnabled = $data['macAuthByPassEnabled'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('authentication', get_object_vars($data)) && null !== ($data->authentication ?? null)) {
            $dataArray['authentication'] = ($data->authentication ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->authentication ?? null, 'json', $context));
        }
        if (array_key_exists('disabledAccounting', get_object_vars($data)) && null !== ($data->disabledAccounting ?? null)) {
            $dataArray['disabledAccounting'] = $data->disabledAccounting ?? null;
        }
        if (array_key_exists('accounting', get_object_vars($data)) && null !== ($data->accounting ?? null)) {
            $dataArray['accounting'] = ($data->accounting ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->accounting ?? null, 'json', $context));
        }
        $dataArray['macAuthByPassEnabled'] = $data->macAuthByPassEnabled ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLanPortAuthenticator::class => false];
    }
}