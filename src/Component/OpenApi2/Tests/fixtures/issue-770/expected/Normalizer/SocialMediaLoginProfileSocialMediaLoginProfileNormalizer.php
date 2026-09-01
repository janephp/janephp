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
class SocialMediaLoginProfileSocialMediaLoginProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SocialMediaLoginProfileSocialMediaLoginProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SocialMediaLoginProfileSocialMediaLoginProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SocialMediaLoginProfileSocialMediaLoginProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('linkedinEnabled', $data) && \is_int($data['linkedinEnabled'])) {
            $data['linkedinEnabled'] = (bool) $data['linkedinEnabled'];
        }
        if (\array_key_exists('googleEnabled', $data) && \is_int($data['googleEnabled'])) {
            $data['googleEnabled'] = (bool) $data['googleEnabled'];
        }
        if (\array_key_exists('microsoftEnabled', $data) && \is_int($data['microsoftEnabled'])) {
            $data['microsoftEnabled'] = (bool) $data['microsoftEnabled'];
        }
        if (\array_key_exists('facebookEnabled', $data) && \is_int($data['facebookEnabled'])) {
            $data['facebookEnabled'] = (bool) $data['facebookEnabled'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('linkedinEnabled', $data)) {
            $object->linkedinEnabled = $data['linkedinEnabled'];
        }
        if (\array_key_exists('linkedinClientId', $data)) {
            $object->linkedinClientId = $data['linkedinClientId'];
        }
        if (\array_key_exists('linkedinSecret', $data)) {
            $object->linkedinSecret = $data['linkedinSecret'];
        }
        if (\array_key_exists('googleEnabled', $data)) {
            $object->googleEnabled = $data['googleEnabled'];
        }
        if (\array_key_exists('googleClientId', $data)) {
            $object->googleClientId = $data['googleClientId'];
        }
        if (\array_key_exists('googleSecret', $data)) {
            $object->googleSecret = $data['googleSecret'];
        }
        if (\array_key_exists('microsoftEnabled', $data)) {
            $object->microsoftEnabled = $data['microsoftEnabled'];
        }
        if (\array_key_exists('microsoftClientId', $data)) {
            $object->microsoftClientId = $data['microsoftClientId'];
        }
        if (\array_key_exists('microsoftSecret', $data)) {
            $object->microsoftSecret = $data['microsoftSecret'];
        }
        if (\array_key_exists('facebookEnabled', $data)) {
            $object->facebookEnabled = $data['facebookEnabled'];
        }
        if (\array_key_exists('facebookClientId', $data)) {
            $object->facebookClientId = $data['facebookClientId'];
        }
        if (\array_key_exists('facebookSecret', $data)) {
            $object->facebookSecret = $data['facebookSecret'];
        }
        if (\array_key_exists('whitelistedDomains', $data)) {
            $values = [];
            foreach ($data['whitelistedDomains'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\SocialMediaLoginProfileWhitelistedDomain::class, 'json', $context);
            }
            $object->whitelistedDomains = $values;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('linkedinEnabled', get_object_vars($data)) && null !== ($data->linkedinEnabled ?? null)) {
            $dataArray['linkedinEnabled'] = $data->linkedinEnabled ?? null;
        }
        if (array_key_exists('linkedinClientId', get_object_vars($data)) && null !== ($data->linkedinClientId ?? null)) {
            $dataArray['linkedinClientId'] = $data->linkedinClientId ?? null;
        }
        if (array_key_exists('linkedinSecret', get_object_vars($data)) && null !== ($data->linkedinSecret ?? null)) {
            $dataArray['linkedinSecret'] = $data->linkedinSecret ?? null;
        }
        if (array_key_exists('googleEnabled', get_object_vars($data)) && null !== ($data->googleEnabled ?? null)) {
            $dataArray['googleEnabled'] = $data->googleEnabled ?? null;
        }
        if (array_key_exists('googleClientId', get_object_vars($data)) && null !== ($data->googleClientId ?? null)) {
            $dataArray['googleClientId'] = $data->googleClientId ?? null;
        }
        if (array_key_exists('googleSecret', get_object_vars($data)) && null !== ($data->googleSecret ?? null)) {
            $dataArray['googleSecret'] = $data->googleSecret ?? null;
        }
        if (array_key_exists('microsoftEnabled', get_object_vars($data)) && null !== ($data->microsoftEnabled ?? null)) {
            $dataArray['microsoftEnabled'] = $data->microsoftEnabled ?? null;
        }
        if (array_key_exists('microsoftClientId', get_object_vars($data)) && null !== ($data->microsoftClientId ?? null)) {
            $dataArray['microsoftClientId'] = $data->microsoftClientId ?? null;
        }
        if (array_key_exists('microsoftSecret', get_object_vars($data)) && null !== ($data->microsoftSecret ?? null)) {
            $dataArray['microsoftSecret'] = $data->microsoftSecret ?? null;
        }
        if (array_key_exists('facebookEnabled', get_object_vars($data)) && null !== ($data->facebookEnabled ?? null)) {
            $dataArray['facebookEnabled'] = $data->facebookEnabled ?? null;
        }
        if (array_key_exists('facebookClientId', get_object_vars($data)) && null !== ($data->facebookClientId ?? null)) {
            $dataArray['facebookClientId'] = $data->facebookClientId ?? null;
        }
        if (array_key_exists('facebookSecret', get_object_vars($data)) && null !== ($data->facebookSecret ?? null)) {
            $dataArray['facebookSecret'] = $data->facebookSecret ?? null;
        }
        $values = [];
        foreach ($data->whitelistedDomains ?? null as $value) {
            $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['whitelistedDomains'] = $values;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SocialMediaLoginProfileSocialMediaLoginProfile::class => false];
    }
}