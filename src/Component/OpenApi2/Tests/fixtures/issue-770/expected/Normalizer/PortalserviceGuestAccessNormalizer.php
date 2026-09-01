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
class PortalserviceGuestAccessNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceGuestAccess::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceGuestAccess::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceGuestAccess();
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
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->zoneId = $data['zoneId'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('portalCustomization', $data)) {
            $object->portalCustomization = $this->denormalizer->denormalize($data['portalCustomization'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonPortalCustomization::class, 'json', $context);
        }
        if (\array_key_exists('redirect', $data)) {
            $object->redirect = $this->denormalizer->denormalize($data['redirect'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalservicePortalRedirect::class, 'json', $context);
        }
        if (\array_key_exists('smsGateway', $data)) {
            $object->smsGateway = $this->denormalizer->denormalize($data['smsGateway'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('userSession', $data)) {
            $object->userSession = $this->denormalizer->denormalize($data['userSession'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceUserSession::class, 'json', $context);
        }
        if (\array_key_exists('selfRegistration', $data)) {
            $object->selfRegistration = $data['selfRegistration'];
        }
        if (\array_key_exists('smtpServerEnabled', $data)) {
            $object->smtpServerEnabled = $data['smtpServerEnabled'];
        }
        if (\array_key_exists('expirationValue', $data)) {
            $object->expirationValue = $data['expirationValue'];
        }
        if (\array_key_exists('expirationUnit', $data)) {
            $object->expirationUnit = $data['expirationUnit'];
        }
        if (\array_key_exists('passEffectSince', $data)) {
            $object->passEffectSince = $data['passEffectSince'];
        }
        if (\array_key_exists('passUseDays', $data)) {
            $object->passUseDays = $data['passUseDays'];
        }
        if (\array_key_exists('maxAllowedDeviceLimitNum', $data)) {
            $object->maxAllowedDeviceLimitNum = $data['maxAllowedDeviceLimitNum'];
        }
        if (\array_key_exists('sponsorApproval', $data)) {
            $object->sponsorApproval = $data['sponsorApproval'];
        }
        if (\array_key_exists('sponsorAuthServer', $data)) {
            $object->sponsorAuthServer = $data['sponsorAuthServer'];
        }
        if (\array_key_exists('sponsorEmailAddress', $data)) {
            $values = [];
            foreach ($data['sponsorEmailAddress'] as $value) {
                $values[] = $value;
            }
            $object->sponsorEmailAddress = $values;
        }
        if (\array_key_exists('notificationMethod', $data)) {
            $object->notificationMethod = $data['notificationMethod'];
        }
        if (\array_key_exists('requireLoginAgain', $data)) {
            $object->requireLoginAgain = $data['requireLoginAgain'];
        }
        if (\array_key_exists('sessionValue', $data)) {
            $object->sessionValue = $data['sessionValue'];
        }
        if (\array_key_exists('sessionUnit', $data)) {
            $object->sessionUnit = $data['sessionUnit'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('zoneId', get_object_vars($data)) && null !== ($data->zoneId ?? null)) {
            $dataArray['zoneId'] = $data->zoneId ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('portalCustomization', get_object_vars($data)) && null !== ($data->portalCustomization ?? null)) {
            $dataArray['portalCustomization'] = ($data->portalCustomization ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->portalCustomization ?? null, 'json', $context));
        }
        if (array_key_exists('redirect', get_object_vars($data)) && null !== ($data->redirect ?? null)) {
            $dataArray['redirect'] = ($data->redirect ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->redirect ?? null, 'json', $context));
        }
        if (array_key_exists('smsGateway', get_object_vars($data)) && null !== ($data->smsGateway ?? null)) {
            $dataArray['smsGateway'] = ($data->smsGateway ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->smsGateway ?? null, 'json', $context));
        }
        if (array_key_exists('userSession', get_object_vars($data)) && null !== ($data->userSession ?? null)) {
            $dataArray['userSession'] = ($data->userSession ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->userSession ?? null, 'json', $context));
        }
        if (array_key_exists('selfRegistration', get_object_vars($data)) && null !== ($data->selfRegistration ?? null)) {
            $dataArray['selfRegistration'] = $data->selfRegistration ?? null;
        }
        if (array_key_exists('smtpServerEnabled', get_object_vars($data)) && null !== ($data->smtpServerEnabled ?? null)) {
            $dataArray['smtpServerEnabled'] = $data->smtpServerEnabled ?? null;
        }
        if (array_key_exists('expirationValue', get_object_vars($data)) && null !== ($data->expirationValue ?? null)) {
            $dataArray['expirationValue'] = $data->expirationValue ?? null;
        }
        if (array_key_exists('expirationUnit', get_object_vars($data)) && null !== ($data->expirationUnit ?? null)) {
            $dataArray['expirationUnit'] = $data->expirationUnit ?? null;
        }
        if (array_key_exists('passEffectSince', get_object_vars($data)) && null !== ($data->passEffectSince ?? null)) {
            $dataArray['passEffectSince'] = $data->passEffectSince ?? null;
        }
        if (array_key_exists('passUseDays', get_object_vars($data)) && null !== ($data->passUseDays ?? null)) {
            $dataArray['passUseDays'] = $data->passUseDays ?? null;
        }
        if (array_key_exists('maxAllowedDeviceLimitNum', get_object_vars($data)) && null !== ($data->maxAllowedDeviceLimitNum ?? null)) {
            $dataArray['maxAllowedDeviceLimitNum'] = $data->maxAllowedDeviceLimitNum ?? null;
        }
        if (array_key_exists('sponsorApproval', get_object_vars($data)) && null !== ($data->sponsorApproval ?? null)) {
            $dataArray['sponsorApproval'] = $data->sponsorApproval ?? null;
        }
        if (array_key_exists('sponsorAuthServer', get_object_vars($data)) && null !== ($data->sponsorAuthServer ?? null)) {
            $dataArray['sponsorAuthServer'] = $data->sponsorAuthServer ?? null;
        }
        if (array_key_exists('sponsorEmailAddress', get_object_vars($data)) && null !== ($data->sponsorEmailAddress ?? null)) {
            $values = [];
            foreach ($data->sponsorEmailAddress ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['sponsorEmailAddress'] = $values;
        }
        if (array_key_exists('notificationMethod', get_object_vars($data)) && null !== ($data->notificationMethod ?? null)) {
            $dataArray['notificationMethod'] = $data->notificationMethod ?? null;
        }
        if (array_key_exists('requireLoginAgain', get_object_vars($data)) && null !== ($data->requireLoginAgain ?? null)) {
            $dataArray['requireLoginAgain'] = $data->requireLoginAgain ?? null;
        }
        if (array_key_exists('sessionValue', get_object_vars($data)) && null !== ($data->sessionValue ?? null)) {
            $dataArray['sessionValue'] = $data->sessionValue ?? null;
        }
        if (array_key_exists('sessionUnit', get_object_vars($data)) && null !== ($data->sessionUnit ?? null)) {
            $dataArray['sessionUnit'] = $data->sessionUnit ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceGuestAccess::class => false];
    }
}