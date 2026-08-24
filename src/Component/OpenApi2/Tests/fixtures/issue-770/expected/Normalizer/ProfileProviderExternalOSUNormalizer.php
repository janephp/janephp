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
class ProfileProviderExternalOSUNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderExternalOSU::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderExternalOSU::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderExternalOSU();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('provisioningProtocals', $data)) {
            $values = [];
            foreach ($data['provisioningProtocals'] as $value) {
                $values[] = $value;
            }
            $object->setProvisioningProtocals($values);
        }
        if (\array_key_exists('osuServiceUrl', $data)) {
            $object->setOsuServiceUrl($data['osuServiceUrl']);
        }
        if (\array_key_exists('osuNaiRealm', $data)) {
            $object->setOsuNaiRealm($data['osuNaiRealm']);
        }
        if (\array_key_exists('singleSsidNai', $data)) {
            $object->setSingleSsidNai($data['singleSsidNai']);
        }
        if (\array_key_exists('commonLanguageIcon', $data)) {
            $object->setCommonLanguageIcon($data['commonLanguageIcon']);
        }
        if (\array_key_exists('subscriptionDescriptions', $data)) {
            $values_1 = [];
            foreach ($data['subscriptionDescriptions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderSubscriptionDescription::class, 'json', $context);
            }
            $object->setSubscriptionDescriptions($values_1);
        }
        if (\array_key_exists('whitelistedDomains', $data)) {
            $values_2 = [];
            foreach ($data['whitelistedDomains'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setWhitelistedDomains($values_2);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getProvisioningProtocals() as $value) {
            $values[] = $value;
        }
        $dataArray['provisioningProtocals'] = $values;
        $dataArray['osuServiceUrl'] = $data->getOsuServiceUrl();
        $dataArray['osuNaiRealm'] = $data->getOsuNaiRealm();
        if ($data->isInitialized('singleSsidNai') && null !== $data->getSingleSsidNai()) {
            $dataArray['singleSsidNai'] = $data->getSingleSsidNai();
        }
        $dataArray['commonLanguageIcon'] = $data->getCommonLanguageIcon();
        $values_1 = [];
        foreach ($data->getSubscriptionDescriptions() as $value_1) {
            $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
        }
        $dataArray['subscriptionDescriptions'] = $values_1;
        if ($data->isInitialized('whitelistedDomains') && null !== $data->getWhitelistedDomains()) {
            $values_2 = [];
            foreach ($data->getWhitelistedDomains() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['whitelistedDomains'] = $values_2;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderExternalOSU::class => false];
    }
}