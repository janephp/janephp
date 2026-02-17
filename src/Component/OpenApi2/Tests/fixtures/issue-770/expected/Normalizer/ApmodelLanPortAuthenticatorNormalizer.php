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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLanPortAuthenticator();
        if (\array_key_exists('disabledAccounting', $data) && \is_int($data['disabledAccounting'])) {
            $data['disabledAccounting'] = (bool) $data['disabledAccounting'];
        }
        if (\array_key_exists('macAuthByPassEnabled', $data) && \is_int($data['macAuthByPassEnabled'])) {
            $data['macAuthByPassEnabled'] = (bool) $data['macAuthByPassEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('authentication', $data)) {
            $object->setAuthentication($this->denormalizer->denormalize($data['authentication'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelAuthenticatorAAAServer::class, 'json', $context));
        }
        if (\array_key_exists('disabledAccounting', $data)) {
            $object->setDisabledAccounting($data['disabledAccounting']);
        }
        if (\array_key_exists('accounting', $data)) {
            $object->setAccounting($this->denormalizer->denormalize($data['accounting'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelAuthenticatorAAAServer::class, 'json', $context));
        }
        if (\array_key_exists('macAuthByPassEnabled', $data)) {
            $object->setMacAuthByPassEnabled($data['macAuthByPassEnabled']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('authentication') && null !== $data->getAuthentication()) {
            $dataArray['authentication'] = $this->normalizer->normalize($data->getAuthentication(), 'json', $context);
        }
        if ($data->isInitialized('disabledAccounting') && null !== $data->getDisabledAccounting()) {
            $dataArray['disabledAccounting'] = $data->getDisabledAccounting();
        }
        if ($data->isInitialized('accounting') && null !== $data->getAccounting()) {
            $dataArray['accounting'] = $this->normalizer->normalize($data->getAccounting(), 'json', $context);
        }
        $dataArray['macAuthByPassEnabled'] = $data->getMacAuthByPassEnabled();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLanPortAuthenticator::class => false];
    }
}