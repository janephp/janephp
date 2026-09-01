<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
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
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProviderExternalOSU::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProviderExternalOSU::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProviderExternalOSU();
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
            $object->provisioningProtocals = $values;
        }
        if (\array_key_exists('osuServiceUrl', $data)) {
            $object->osuServiceUrl = $data['osuServiceUrl'];
        }
        if (\array_key_exists('osuNaiRealm', $data)) {
            $object->osuNaiRealm = $data['osuNaiRealm'];
        }
        if (\array_key_exists('singleSsidNai', $data)) {
            $object->singleSsidNai = $data['singleSsidNai'];
        }
        if (\array_key_exists('commonLanguageIcon', $data)) {
            $object->commonLanguageIcon = $data['commonLanguageIcon'];
        }
        if (\array_key_exists('subscriptionDescriptions', $data)) {
            $values_1 = [];
            foreach ($data['subscriptionDescriptions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProviderSubscriptionDescription::class, 'json', $context);
            }
            $object->subscriptionDescriptions = $values_1;
        }
        if (\array_key_exists('whitelistedDomains', $data)) {
            $values_2 = [];
            foreach ($data['whitelistedDomains'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->whitelistedDomains = $values_2;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->provisioningProtocals ?? null as $value) {
            $values[] = $value;
        }
        $dataArray['provisioningProtocals'] = $values;
        $dataArray['osuServiceUrl'] = $data->osuServiceUrl ?? null;
        $dataArray['osuNaiRealm'] = $data->osuNaiRealm ?? null;
        if (array_key_exists('singleSsidNai', get_object_vars($data)) && null !== ($data->singleSsidNai ?? null)) {
            $dataArray['singleSsidNai'] = $data->singleSsidNai ?? null;
        }
        $dataArray['commonLanguageIcon'] = $data->commonLanguageIcon ?? null;
        $values_1 = [];
        foreach ($data->subscriptionDescriptions ?? null as $value_1) {
            $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
        }
        $dataArray['subscriptionDescriptions'] = $values_1;
        if (array_key_exists('whitelistedDomains', get_object_vars($data)) && null !== ($data->whitelistedDomains ?? null)) {
            $values_2 = [];
            foreach ($data->whitelistedDomains ?? null as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['whitelistedDomains'] = $values_2;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProviderExternalOSU::class => false];
    }
}