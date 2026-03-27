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
class PortalserviceCreateGuestAccessNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateGuestAccess::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateGuestAccess::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateGuestAccess();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('selfRegistration', $data) && \is_int($data['selfRegistration'])) {
            $data['selfRegistration'] = (bool) $data['selfRegistration'];
        }
        if (\array_key_exists('smtpServerEnabled', $data) && \is_int($data['smtpServerEnabled'])) {
            $data['smtpServerEnabled'] = (bool) $data['smtpServerEnabled'];
        }
        if (\array_key_exists('sponsorApproval', $data) && \is_int($data['sponsorApproval'])) {
            $data['sponsorApproval'] = (bool) $data['sponsorApproval'];
        }
        if (\array_key_exists('requireLoginAgain', $data) && \is_int($data['requireLoginAgain'])) {
            $data['requireLoginAgain'] = (bool) $data['requireLoginAgain'];
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('portalCustomization', $data)) {
            $object->setPortalCustomization($this->denormalizer->denormalize($data['portalCustomization'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonPortalCustomization::class, 'json', $context));
        }
        if (\array_key_exists('redirect', $data)) {
            $object->setRedirect($this->denormalizer->denormalize($data['redirect'], \Jane\Component\OpenApi3\Tests\Expected\Model\PortalservicePortalRedirect::class, 'json', $context));
        }
        if (\array_key_exists('smsGateway', $data)) {
            $object->setSmsGateway($this->denormalizer->denormalize($data['smsGateway'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('userSession', $data)) {
            $object->setUserSession($this->denormalizer->denormalize($data['userSession'], \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceUserSession::class, 'json', $context));
        }
        if (\array_key_exists('selfRegistration', $data)) {
            $object->setSelfRegistration($data['selfRegistration']);
        }
        if (\array_key_exists('smtpServerEnabled', $data)) {
            $object->setSmtpServerEnabled($data['smtpServerEnabled']);
        }
        if (\array_key_exists('expirationValue', $data)) {
            $object->setExpirationValue($data['expirationValue']);
        }
        if (\array_key_exists('expirationUnit', $data)) {
            $object->setExpirationUnit($data['expirationUnit']);
        }
        if (\array_key_exists('passEffectSince', $data)) {
            $object->setPassEffectSince($data['passEffectSince']);
        }
        if (\array_key_exists('passUseDays', $data)) {
            $object->setPassUseDays($data['passUseDays']);
        }
        if (\array_key_exists('maxAllowedDeviceLimitNum', $data)) {
            $object->setMaxAllowedDeviceLimitNum($data['maxAllowedDeviceLimitNum']);
        }
        if (\array_key_exists('sponsorApproval', $data)) {
            $object->setSponsorApproval($data['sponsorApproval']);
        }
        if (\array_key_exists('sponsorAuthServer', $data)) {
            $object->setSponsorAuthServer($data['sponsorAuthServer']);
        }
        if (\array_key_exists('sponsorEmailAddress', $data)) {
            $values = [];
            foreach ($data['sponsorEmailAddress'] as $value) {
                $values[] = $value;
            }
            $object->setSponsorEmailAddress($values);
        }
        if (\array_key_exists('notificationMethod', $data)) {
            $object->setNotificationMethod($data['notificationMethod']);
        }
        if (\array_key_exists('requireLoginAgain', $data)) {
            $object->setRequireLoginAgain($data['requireLoginAgain']);
        }
        if (\array_key_exists('sessionValue', $data)) {
            $object->setSessionValue($data['sessionValue']);
        }
        if (\array_key_exists('sessionUnit', $data)) {
            $object->setSessionUnit($data['sessionUnit']);
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
        $dataArray['portalCustomization'] = $this->normalizer->normalize($data->getPortalCustomization(), 'json', $context);
        if ($data->isInitialized('redirect') && null !== $data->getRedirect()) {
            $dataArray['redirect'] = $this->normalizer->normalize($data->getRedirect(), 'json', $context);
        }
        if ($data->isInitialized('smsGateway') && null !== $data->getSmsGateway()) {
            $dataArray['smsGateway'] = $this->normalizer->normalize($data->getSmsGateway(), 'json', $context);
        }
        $dataArray['userSession'] = $this->normalizer->normalize($data->getUserSession(), 'json', $context);
        if ($data->isInitialized('selfRegistration') && null !== $data->getSelfRegistration()) {
            $dataArray['selfRegistration'] = $data->getSelfRegistration();
        }
        if ($data->isInitialized('smtpServerEnabled') && null !== $data->getSmtpServerEnabled()) {
            $dataArray['smtpServerEnabled'] = $data->getSmtpServerEnabled();
        }
        if ($data->isInitialized('expirationValue') && null !== $data->getExpirationValue()) {
            $dataArray['expirationValue'] = $data->getExpirationValue();
        }
        if ($data->isInitialized('expirationUnit') && null !== $data->getExpirationUnit()) {
            $dataArray['expirationUnit'] = $data->getExpirationUnit();
        }
        if ($data->isInitialized('passEffectSince') && null !== $data->getPassEffectSince()) {
            $dataArray['passEffectSince'] = $data->getPassEffectSince();
        }
        if ($data->isInitialized('passUseDays') && null !== $data->getPassUseDays()) {
            $dataArray['passUseDays'] = $data->getPassUseDays();
        }
        if ($data->isInitialized('maxAllowedDeviceLimitNum') && null !== $data->getMaxAllowedDeviceLimitNum()) {
            $dataArray['maxAllowedDeviceLimitNum'] = $data->getMaxAllowedDeviceLimitNum();
        }
        if ($data->isInitialized('sponsorApproval') && null !== $data->getSponsorApproval()) {
            $dataArray['sponsorApproval'] = $data->getSponsorApproval();
        }
        if ($data->isInitialized('sponsorAuthServer') && null !== $data->getSponsorAuthServer()) {
            $dataArray['sponsorAuthServer'] = $data->getSponsorAuthServer();
        }
        if ($data->isInitialized('sponsorEmailAddress') && null !== $data->getSponsorEmailAddress()) {
            $values = [];
            foreach ($data->getSponsorEmailAddress() as $value) {
                $values[] = $value;
            }
            $dataArray['sponsorEmailAddress'] = $values;
        }
        if ($data->isInitialized('notificationMethod') && null !== $data->getNotificationMethod()) {
            $dataArray['notificationMethod'] = $data->getNotificationMethod();
        }
        if ($data->isInitialized('requireLoginAgain') && null !== $data->getRequireLoginAgain()) {
            $dataArray['requireLoginAgain'] = $data->getRequireLoginAgain();
        }
        if ($data->isInitialized('sessionValue') && null !== $data->getSessionValue()) {
            $dataArray['sessionValue'] = $data->getSessionValue();
        }
        if ($data->isInitialized('sessionUnit') && null !== $data->getSessionUnit()) {
            $dataArray['sessionUnit'] = $data->getSessionUnit();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateGuestAccess::class => false];
    }
}