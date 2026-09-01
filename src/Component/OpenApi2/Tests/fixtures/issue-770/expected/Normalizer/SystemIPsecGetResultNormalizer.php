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
class SystemIPsecGetResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIPsecGetResult::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIPsecGetResult::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIPsecGetResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ipSecEnabled', $data) && \is_int($data['ipSecEnabled'])) {
            $data['ipSecEnabled'] = (bool) $data['ipSecEnabled'];
        }
        if (\array_key_exists('ikeRekeyDisabled', $data) && \is_int($data['ikeRekeyDisabled'])) {
            $data['ikeRekeyDisabled'] = (bool) $data['ikeRekeyDisabled'];
        }
        if (\array_key_exists('espRekeyDisabled', $data) && \is_int($data['espRekeyDisabled'])) {
            $data['espRekeyDisabled'] = (bool) $data['espRekeyDisabled'];
        }
        if (\array_key_exists('ocspEnabled', $data) && \is_int($data['ocspEnabled'])) {
            $data['ocspEnabled'] = (bool) $data['ocspEnabled'];
        }
        if (\array_key_exists('ipSecEnabled', $data)) {
            $object->ipSecEnabled = $data['ipSecEnabled'];
        }
        if (\array_key_exists('securityGateway', $data)) {
            $object->securityGateway = $data['securityGateway'];
        }
        if (\array_key_exists('subnetMask', $data)) {
            $object->subnetMask = $data['subnetMask'];
        }
        if (\array_key_exists('authType', $data)) {
            $object->authType = $data['authType'];
        }
        if (\array_key_exists('preSharedKey', $data)) {
            $object->preSharedKey = $data['preSharedKey'];
        }
        if (\array_key_exists('remoteId', $data)) {
            $object->remoteId = $data['remoteId'];
        }
        if (\array_key_exists('scgCertId', $data)) {
            $object->scgCertId = $data['scgCertId'];
        }
        if (\array_key_exists('ikeProposals', $data)) {
            $values = [];
            foreach ($data['ikeProposals'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIPsecProposal::class, 'json', $context);
            }
            $object->ikeProposals = $values;
        }
        if (\array_key_exists('ikeRekeyDisabled', $data)) {
            $object->ikeRekeyDisabled = $data['ikeRekeyDisabled'];
        }
        if (\array_key_exists('ikeRekeyTime', $data)) {
            $object->ikeRekeyTime = $data['ikeRekeyTime'];
        }
        if (\array_key_exists('ikeRekeyTimeUnit', $data)) {
            $object->ikeRekeyTimeUnit = $data['ikeRekeyTimeUnit'];
        }
        if (\array_key_exists('espProposals', $data)) {
            $values_1 = [];
            foreach ($data['espProposals'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIPsecProposal::class, 'json', $context);
            }
            $object->espProposals = $values_1;
        }
        if (\array_key_exists('espRekeyDisabled', $data)) {
            $object->espRekeyDisabled = $data['espRekeyDisabled'];
        }
        if (\array_key_exists('espRekeyTime', $data)) {
            $object->espRekeyTime = $data['espRekeyTime'];
        }
        if (\array_key_exists('espRekeyTimeUnit', $data)) {
            $object->espRekeyTimeUnit = $data['espRekeyTimeUnit'];
        }
        if (\array_key_exists('ocspEnabled', $data)) {
            $object->ocspEnabled = $data['ocspEnabled'];
        }
        if (\array_key_exists('ocspAction', $data)) {
            $object->ocspAction = $data['ocspAction'];
        }
        if (\array_key_exists('trustChainProfileId', $data)) {
            $object->trustChainProfileId = $data['trustChainProfileId'];
        }
        if (\array_key_exists('certSubject', $data)) {
            $object->certSubject = $data['certSubject'];
        }
        if (\array_key_exists('ocspServerUri', $data)) {
            $object->ocspServerUri = $data['ocspServerUri'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('ipSecEnabled', get_object_vars($data)) && null !== ($data->ipSecEnabled ?? null)) {
            $dataArray['ipSecEnabled'] = $data->ipSecEnabled ?? null;
        }
        if (array_key_exists('securityGateway', get_object_vars($data)) && null !== ($data->securityGateway ?? null)) {
            $dataArray['securityGateway'] = $data->securityGateway ?? null;
        }
        if (array_key_exists('subnetMask', get_object_vars($data)) && null !== ($data->subnetMask ?? null)) {
            $dataArray['subnetMask'] = $data->subnetMask ?? null;
        }
        if (array_key_exists('authType', get_object_vars($data)) && null !== ($data->authType ?? null)) {
            $dataArray['authType'] = $data->authType ?? null;
        }
        if (array_key_exists('preSharedKey', get_object_vars($data)) && null !== ($data->preSharedKey ?? null)) {
            $dataArray['preSharedKey'] = $data->preSharedKey ?? null;
        }
        if (array_key_exists('remoteId', get_object_vars($data)) && null !== ($data->remoteId ?? null)) {
            $dataArray['remoteId'] = $data->remoteId ?? null;
        }
        if (array_key_exists('scgCertId', get_object_vars($data)) && null !== ($data->scgCertId ?? null)) {
            $dataArray['scgCertId'] = $data->scgCertId ?? null;
        }
        if (array_key_exists('ikeProposals', get_object_vars($data)) && null !== ($data->ikeProposals ?? null)) {
            $values = [];
            foreach ($data->ikeProposals ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['ikeProposals'] = $values;
        }
        if (array_key_exists('ikeRekeyDisabled', get_object_vars($data)) && null !== ($data->ikeRekeyDisabled ?? null)) {
            $dataArray['ikeRekeyDisabled'] = $data->ikeRekeyDisabled ?? null;
        }
        if (array_key_exists('ikeRekeyTime', get_object_vars($data)) && null !== ($data->ikeRekeyTime ?? null)) {
            $dataArray['ikeRekeyTime'] = $data->ikeRekeyTime ?? null;
        }
        if (array_key_exists('ikeRekeyTimeUnit', get_object_vars($data)) && null !== ($data->ikeRekeyTimeUnit ?? null)) {
            $dataArray['ikeRekeyTimeUnit'] = $data->ikeRekeyTimeUnit ?? null;
        }
        if (array_key_exists('espProposals', get_object_vars($data)) && null !== ($data->espProposals ?? null)) {
            $values_1 = [];
            foreach ($data->espProposals ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['espProposals'] = $values_1;
        }
        if (array_key_exists('espRekeyDisabled', get_object_vars($data)) && null !== ($data->espRekeyDisabled ?? null)) {
            $dataArray['espRekeyDisabled'] = $data->espRekeyDisabled ?? null;
        }
        if (array_key_exists('espRekeyTime', get_object_vars($data)) && null !== ($data->espRekeyTime ?? null)) {
            $dataArray['espRekeyTime'] = $data->espRekeyTime ?? null;
        }
        if (array_key_exists('espRekeyTimeUnit', get_object_vars($data)) && null !== ($data->espRekeyTimeUnit ?? null)) {
            $dataArray['espRekeyTimeUnit'] = $data->espRekeyTimeUnit ?? null;
        }
        if (array_key_exists('ocspEnabled', get_object_vars($data)) && null !== ($data->ocspEnabled ?? null)) {
            $dataArray['ocspEnabled'] = $data->ocspEnabled ?? null;
        }
        if (array_key_exists('ocspAction', get_object_vars($data)) && null !== ($data->ocspAction ?? null)) {
            $dataArray['ocspAction'] = $data->ocspAction ?? null;
        }
        if (array_key_exists('trustChainProfileId', get_object_vars($data)) && null !== ($data->trustChainProfileId ?? null)) {
            $dataArray['trustChainProfileId'] = $data->trustChainProfileId ?? null;
        }
        if (array_key_exists('certSubject', get_object_vars($data)) && null !== ($data->certSubject ?? null)) {
            $dataArray['certSubject'] = $data->certSubject ?? null;
        }
        if (array_key_exists('ocspServerUri', get_object_vars($data)) && null !== ($data->ocspServerUri ?? null)) {
            $dataArray['ocspServerUri'] = $data->ocspServerUri ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemIPsecGetResult::class => false];
    }
}