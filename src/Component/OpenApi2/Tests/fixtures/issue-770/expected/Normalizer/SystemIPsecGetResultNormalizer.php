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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIPsecGetResult();
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ipSecEnabled', $data)) {
            $object->setIpSecEnabled($data['ipSecEnabled']);
        }
        if (\array_key_exists('securityGateway', $data)) {
            $object->setSecurityGateway($data['securityGateway']);
        }
        if (\array_key_exists('subnetMask', $data)) {
            $object->setSubnetMask($data['subnetMask']);
        }
        if (\array_key_exists('authType', $data)) {
            $object->setAuthType($data['authType']);
        }
        if (\array_key_exists('preSharedKey', $data)) {
            $object->setPreSharedKey($data['preSharedKey']);
        }
        if (\array_key_exists('remoteId', $data)) {
            $object->setRemoteId($data['remoteId']);
        }
        if (\array_key_exists('scgCertId', $data)) {
            $object->setScgCertId($data['scgCertId']);
        }
        if (\array_key_exists('ikeProposals', $data)) {
            $values = [];
            foreach ($data['ikeProposals'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIPsecProposal::class, 'json', $context);
            }
            $object->setIkeProposals($values);
        }
        if (\array_key_exists('ikeRekeyDisabled', $data)) {
            $object->setIkeRekeyDisabled($data['ikeRekeyDisabled']);
        }
        if (\array_key_exists('ikeRekeyTime', $data)) {
            $object->setIkeRekeyTime($data['ikeRekeyTime']);
        }
        if (\array_key_exists('ikeRekeyTimeUnit', $data)) {
            $object->setIkeRekeyTimeUnit($data['ikeRekeyTimeUnit']);
        }
        if (\array_key_exists('espProposals', $data)) {
            $values_1 = [];
            foreach ($data['espProposals'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIPsecProposal::class, 'json', $context);
            }
            $object->setEspProposals($values_1);
        }
        if (\array_key_exists('espRekeyDisabled', $data)) {
            $object->setEspRekeyDisabled($data['espRekeyDisabled']);
        }
        if (\array_key_exists('espRekeyTime', $data)) {
            $object->setEspRekeyTime($data['espRekeyTime']);
        }
        if (\array_key_exists('espRekeyTimeUnit', $data)) {
            $object->setEspRekeyTimeUnit($data['espRekeyTimeUnit']);
        }
        if (\array_key_exists('ocspEnabled', $data)) {
            $object->setOcspEnabled($data['ocspEnabled']);
        }
        if (\array_key_exists('ocspAction', $data)) {
            $object->setOcspAction($data['ocspAction']);
        }
        if (\array_key_exists('trustChainProfileId', $data)) {
            $object->setTrustChainProfileId($data['trustChainProfileId']);
        }
        if (\array_key_exists('certSubject', $data)) {
            $object->setCertSubject($data['certSubject']);
        }
        if (\array_key_exists('ocspServerUri', $data)) {
            $object->setOcspServerUri($data['ocspServerUri']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('ipSecEnabled') && null !== $data->getIpSecEnabled()) {
            $dataArray['ipSecEnabled'] = $data->getIpSecEnabled();
        }
        if ($data->isInitialized('securityGateway') && null !== $data->getSecurityGateway()) {
            $dataArray['securityGateway'] = $data->getSecurityGateway();
        }
        if ($data->isInitialized('subnetMask') && null !== $data->getSubnetMask()) {
            $dataArray['subnetMask'] = $data->getSubnetMask();
        }
        if ($data->isInitialized('authType') && null !== $data->getAuthType()) {
            $dataArray['authType'] = $data->getAuthType();
        }
        if ($data->isInitialized('preSharedKey') && null !== $data->getPreSharedKey()) {
            $dataArray['preSharedKey'] = $data->getPreSharedKey();
        }
        if ($data->isInitialized('remoteId') && null !== $data->getRemoteId()) {
            $dataArray['remoteId'] = $data->getRemoteId();
        }
        if ($data->isInitialized('scgCertId') && null !== $data->getScgCertId()) {
            $dataArray['scgCertId'] = $data->getScgCertId();
        }
        if ($data->isInitialized('ikeProposals') && null !== $data->getIkeProposals()) {
            $values = [];
            foreach ($data->getIkeProposals() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['ikeProposals'] = $values;
        }
        if ($data->isInitialized('ikeRekeyDisabled') && null !== $data->getIkeRekeyDisabled()) {
            $dataArray['ikeRekeyDisabled'] = $data->getIkeRekeyDisabled();
        }
        if ($data->isInitialized('ikeRekeyTime') && null !== $data->getIkeRekeyTime()) {
            $dataArray['ikeRekeyTime'] = $data->getIkeRekeyTime();
        }
        if ($data->isInitialized('ikeRekeyTimeUnit') && null !== $data->getIkeRekeyTimeUnit()) {
            $dataArray['ikeRekeyTimeUnit'] = $data->getIkeRekeyTimeUnit();
        }
        if ($data->isInitialized('espProposals') && null !== $data->getEspProposals()) {
            $values_1 = [];
            foreach ($data->getEspProposals() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['espProposals'] = $values_1;
        }
        if ($data->isInitialized('espRekeyDisabled') && null !== $data->getEspRekeyDisabled()) {
            $dataArray['espRekeyDisabled'] = $data->getEspRekeyDisabled();
        }
        if ($data->isInitialized('espRekeyTime') && null !== $data->getEspRekeyTime()) {
            $dataArray['espRekeyTime'] = $data->getEspRekeyTime();
        }
        if ($data->isInitialized('espRekeyTimeUnit') && null !== $data->getEspRekeyTimeUnit()) {
            $dataArray['espRekeyTimeUnit'] = $data->getEspRekeyTimeUnit();
        }
        if ($data->isInitialized('ocspEnabled') && null !== $data->getOcspEnabled()) {
            $dataArray['ocspEnabled'] = $data->getOcspEnabled();
        }
        if ($data->isInitialized('ocspAction') && null !== $data->getOcspAction()) {
            $dataArray['ocspAction'] = $data->getOcspAction();
        }
        if ($data->isInitialized('trustChainProfileId') && null !== $data->getTrustChainProfileId()) {
            $dataArray['trustChainProfileId'] = $data->getTrustChainProfileId();
        }
        if ($data->isInitialized('certSubject') && null !== $data->getCertSubject()) {
            $dataArray['certSubject'] = $data->getCertSubject();
        }
        if ($data->isInitialized('ocspServerUri') && null !== $data->getOcspServerUri()) {
            $dataArray['ocspServerUri'] = $data->getOcspServerUri();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemIPsecGetResult::class => false];
    }
}