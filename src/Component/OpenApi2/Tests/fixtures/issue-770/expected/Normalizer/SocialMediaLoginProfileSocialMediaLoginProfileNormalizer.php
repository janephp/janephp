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
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('linkedinEnabled', $data)) {
            $object->setLinkedinEnabled($data['linkedinEnabled']);
        }
        if (\array_key_exists('linkedinClientId', $data)) {
            $object->setLinkedinClientId($data['linkedinClientId']);
        }
        if (\array_key_exists('linkedinSecret', $data)) {
            $object->setLinkedinSecret($data['linkedinSecret']);
        }
        if (\array_key_exists('googleEnabled', $data)) {
            $object->setGoogleEnabled($data['googleEnabled']);
        }
        if (\array_key_exists('googleClientId', $data)) {
            $object->setGoogleClientId($data['googleClientId']);
        }
        if (\array_key_exists('googleSecret', $data)) {
            $object->setGoogleSecret($data['googleSecret']);
        }
        if (\array_key_exists('microsoftEnabled', $data)) {
            $object->setMicrosoftEnabled($data['microsoftEnabled']);
        }
        if (\array_key_exists('microsoftClientId', $data)) {
            $object->setMicrosoftClientId($data['microsoftClientId']);
        }
        if (\array_key_exists('microsoftSecret', $data)) {
            $object->setMicrosoftSecret($data['microsoftSecret']);
        }
        if (\array_key_exists('facebookEnabled', $data)) {
            $object->setFacebookEnabled($data['facebookEnabled']);
        }
        if (\array_key_exists('facebookClientId', $data)) {
            $object->setFacebookClientId($data['facebookClientId']);
        }
        if (\array_key_exists('facebookSecret', $data)) {
            $object->setFacebookSecret($data['facebookSecret']);
        }
        if (\array_key_exists('whitelistedDomains', $data)) {
            $values = [];
            foreach ($data['whitelistedDomains'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\SocialMediaLoginProfileWhitelistedDomain::class, 'json', $context);
            }
            $object->setWhitelistedDomains($values);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('linkedinEnabled') && null !== $data->getLinkedinEnabled()) {
            $dataArray['linkedinEnabled'] = $data->getLinkedinEnabled();
        }
        if ($data->isInitialized('linkedinClientId') && null !== $data->getLinkedinClientId()) {
            $dataArray['linkedinClientId'] = $data->getLinkedinClientId();
        }
        if ($data->isInitialized('linkedinSecret') && null !== $data->getLinkedinSecret()) {
            $dataArray['linkedinSecret'] = $data->getLinkedinSecret();
        }
        if ($data->isInitialized('googleEnabled') && null !== $data->getGoogleEnabled()) {
            $dataArray['googleEnabled'] = $data->getGoogleEnabled();
        }
        if ($data->isInitialized('googleClientId') && null !== $data->getGoogleClientId()) {
            $dataArray['googleClientId'] = $data->getGoogleClientId();
        }
        if ($data->isInitialized('googleSecret') && null !== $data->getGoogleSecret()) {
            $dataArray['googleSecret'] = $data->getGoogleSecret();
        }
        if ($data->isInitialized('microsoftEnabled') && null !== $data->getMicrosoftEnabled()) {
            $dataArray['microsoftEnabled'] = $data->getMicrosoftEnabled();
        }
        if ($data->isInitialized('microsoftClientId') && null !== $data->getMicrosoftClientId()) {
            $dataArray['microsoftClientId'] = $data->getMicrosoftClientId();
        }
        if ($data->isInitialized('microsoftSecret') && null !== $data->getMicrosoftSecret()) {
            $dataArray['microsoftSecret'] = $data->getMicrosoftSecret();
        }
        if ($data->isInitialized('facebookEnabled') && null !== $data->getFacebookEnabled()) {
            $dataArray['facebookEnabled'] = $data->getFacebookEnabled();
        }
        if ($data->isInitialized('facebookClientId') && null !== $data->getFacebookClientId()) {
            $dataArray['facebookClientId'] = $data->getFacebookClientId();
        }
        if ($data->isInitialized('facebookSecret') && null !== $data->getFacebookSecret()) {
            $dataArray['facebookSecret'] = $data->getFacebookSecret();
        }
        $values = [];
        foreach ($data->getWhitelistedDomains() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['whitelistedDomains'] = $values;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SocialMediaLoginProfileSocialMediaLoginProfile::class => false];
    }
}