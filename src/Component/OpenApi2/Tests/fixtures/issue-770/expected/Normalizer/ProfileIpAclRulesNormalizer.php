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
class ProfileIpAclRulesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIpAclRules::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIpAclRules::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIpAclRules();
        if (\array_key_exists('uplinkRateLimitingMbps', $data) && \is_int($data['uplinkRateLimitingMbps'])) {
            $data['uplinkRateLimitingMbps'] = (double) $data['uplinkRateLimitingMbps'];
        }
        if (\array_key_exists('downlinkRateLimitingMbps', $data) && \is_int($data['downlinkRateLimitingMbps'])) {
            $data['downlinkRateLimitingMbps'] = (double) $data['downlinkRateLimitingMbps'];
        }
        if (\array_key_exists('uplinkRateLimitingEnabled', $data) && \is_int($data['uplinkRateLimitingEnabled'])) {
            $data['uplinkRateLimitingEnabled'] = (bool) $data['uplinkRateLimitingEnabled'];
        }
        if (\array_key_exists('downlinkRateLimitingEnabled', $data) && \is_int($data['downlinkRateLimitingEnabled'])) {
            $data['downlinkRateLimitingEnabled'] = (bool) $data['downlinkRateLimitingEnabled'];
        }
        if (\array_key_exists('enableSourceIpSubnet', $data) && \is_int($data['enableSourceIpSubnet'])) {
            $data['enableSourceIpSubnet'] = (bool) $data['enableSourceIpSubnet'];
        }
        if (\array_key_exists('enableSourceV6Prefix', $data) && \is_int($data['enableSourceV6Prefix'])) {
            $data['enableSourceV6Prefix'] = (bool) $data['enableSourceV6Prefix'];
        }
        if (\array_key_exists('enableDestinationIpSubnet', $data) && \is_int($data['enableDestinationIpSubnet'])) {
            $data['enableDestinationIpSubnet'] = (bool) $data['enableDestinationIpSubnet'];
        }
        if (\array_key_exists('enableDestinationV6Prefix', $data) && \is_int($data['enableDestinationV6Prefix'])) {
            $data['enableDestinationV6Prefix'] = (bool) $data['enableDestinationV6Prefix'];
        }
        if (\array_key_exists('enableSourcePortRange', $data) && \is_int($data['enableSourcePortRange'])) {
            $data['enableSourcePortRange'] = (bool) $data['enableSourcePortRange'];
        }
        if (\array_key_exists('enableDestinationPortRange', $data) && \is_int($data['enableDestinationPortRange'])) {
            $data['enableDestinationPortRange'] = (bool) $data['enableDestinationPortRange'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('uplinkRateLimitingEnabled', $data)) {
            $object->setUplinkRateLimitingEnabled($data['uplinkRateLimitingEnabled']);
        }
        if (\array_key_exists('uplinkRateLimitingMbps', $data)) {
            $object->setUplinkRateLimitingMbps($data['uplinkRateLimitingMbps']);
        }
        if (\array_key_exists('downlinkRateLimitingEnabled', $data)) {
            $object->setDownlinkRateLimitingEnabled($data['downlinkRateLimitingEnabled']);
        }
        if (\array_key_exists('downlinkRateLimitingMbps', $data)) {
            $object->setDownlinkRateLimitingMbps($data['downlinkRateLimitingMbps']);
        }
        if (\array_key_exists('ipType', $data)) {
            $object->setIpType($data['ipType']);
        }
        if (\array_key_exists('enableSourceIpSubnet', $data)) {
            $object->setEnableSourceIpSubnet($data['enableSourceIpSubnet']);
        }
        if (\array_key_exists('sourceIp', $data)) {
            $object->setSourceIp($data['sourceIp']);
        }
        if (\array_key_exists('sourceIpMask', $data)) {
            $object->setSourceIpMask($data['sourceIpMask']);
        }
        if (\array_key_exists('enableSourceV6Prefix', $data)) {
            $object->setEnableSourceV6Prefix($data['enableSourceV6Prefix']);
        }
        if (\array_key_exists('sourceIpV6', $data)) {
            $object->setSourceIpV6($data['sourceIpV6']);
        }
        if (\array_key_exists('enableDestinationIpSubnet', $data)) {
            $object->setEnableDestinationIpSubnet($data['enableDestinationIpSubnet']);
        }
        if (\array_key_exists('destinationIp', $data)) {
            $object->setDestinationIp($data['destinationIp']);
        }
        if (\array_key_exists('destinationIpMask', $data)) {
            $object->setDestinationIpMask($data['destinationIpMask']);
        }
        if (\array_key_exists('enableDestinationV6Prefix', $data)) {
            $object->setEnableDestinationV6Prefix($data['enableDestinationV6Prefix']);
        }
        if (\array_key_exists('destinationIpV6', $data)) {
            $object->setDestinationIpV6($data['destinationIpV6']);
        }
        if (\array_key_exists('enableSourcePortRange', $data)) {
            $object->setEnableSourcePortRange($data['enableSourcePortRange']);
        }
        if (\array_key_exists('sourceMinPort', $data)) {
            $object->setSourceMinPort($data['sourceMinPort']);
        }
        if (\array_key_exists('sourceMaxPort', $data)) {
            $object->setSourceMaxPort($data['sourceMaxPort']);
        }
        if (\array_key_exists('enableDestinationPortRange', $data)) {
            $object->setEnableDestinationPortRange($data['enableDestinationPortRange']);
        }
        if (\array_key_exists('destinationMinPort', $data)) {
            $object->setDestinationMinPort($data['destinationMinPort']);
        }
        if (\array_key_exists('destinationMaxPort', $data)) {
            $object->setDestinationMaxPort($data['destinationMaxPort']);
        }
        if (\array_key_exists('protocol', $data)) {
            $object->setProtocol($data['protocol']);
        }
        if (\array_key_exists('customProtocol', $data)) {
            $object->setCustomProtocol($data['customProtocol']);
        }
        if (\array_key_exists('action', $data)) {
            $object->setAction($data['action']);
        }
        if (\array_key_exists('direction', $data)) {
            $object->setDirection($data['direction']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('priority') && null !== $data->getPriority()) {
            $dataArray['priority'] = $data->getPriority();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('uplinkRateLimitingEnabled') && null !== $data->getUplinkRateLimitingEnabled()) {
            $dataArray['uplinkRateLimitingEnabled'] = $data->getUplinkRateLimitingEnabled();
        }
        if ($data->isInitialized('uplinkRateLimitingMbps') && null !== $data->getUplinkRateLimitingMbps()) {
            $dataArray['uplinkRateLimitingMbps'] = $data->getUplinkRateLimitingMbps();
        }
        if ($data->isInitialized('downlinkRateLimitingEnabled') && null !== $data->getDownlinkRateLimitingEnabled()) {
            $dataArray['downlinkRateLimitingEnabled'] = $data->getDownlinkRateLimitingEnabled();
        }
        if ($data->isInitialized('downlinkRateLimitingMbps') && null !== $data->getDownlinkRateLimitingMbps()) {
            $dataArray['downlinkRateLimitingMbps'] = $data->getDownlinkRateLimitingMbps();
        }
        if ($data->isInitialized('ipType') && null !== $data->getIpType()) {
            $dataArray['ipType'] = $data->getIpType();
        }
        if ($data->isInitialized('enableSourceIpSubnet') && null !== $data->getEnableSourceIpSubnet()) {
            $dataArray['enableSourceIpSubnet'] = $data->getEnableSourceIpSubnet();
        }
        if ($data->isInitialized('sourceIp') && null !== $data->getSourceIp()) {
            $dataArray['sourceIp'] = $data->getSourceIp();
        }
        if ($data->isInitialized('sourceIpMask') && null !== $data->getSourceIpMask()) {
            $dataArray['sourceIpMask'] = $data->getSourceIpMask();
        }
        if ($data->isInitialized('enableSourceV6Prefix') && null !== $data->getEnableSourceV6Prefix()) {
            $dataArray['enableSourceV6Prefix'] = $data->getEnableSourceV6Prefix();
        }
        if ($data->isInitialized('sourceIpV6') && null !== $data->getSourceIpV6()) {
            $dataArray['sourceIpV6'] = $data->getSourceIpV6();
        }
        if ($data->isInitialized('enableDestinationIpSubnet') && null !== $data->getEnableDestinationIpSubnet()) {
            $dataArray['enableDestinationIpSubnet'] = $data->getEnableDestinationIpSubnet();
        }
        if ($data->isInitialized('destinationIp') && null !== $data->getDestinationIp()) {
            $dataArray['destinationIp'] = $data->getDestinationIp();
        }
        if ($data->isInitialized('destinationIpMask') && null !== $data->getDestinationIpMask()) {
            $dataArray['destinationIpMask'] = $data->getDestinationIpMask();
        }
        if ($data->isInitialized('enableDestinationV6Prefix') && null !== $data->getEnableDestinationV6Prefix()) {
            $dataArray['enableDestinationV6Prefix'] = $data->getEnableDestinationV6Prefix();
        }
        if ($data->isInitialized('destinationIpV6') && null !== $data->getDestinationIpV6()) {
            $dataArray['destinationIpV6'] = $data->getDestinationIpV6();
        }
        if ($data->isInitialized('enableSourcePortRange') && null !== $data->getEnableSourcePortRange()) {
            $dataArray['enableSourcePortRange'] = $data->getEnableSourcePortRange();
        }
        if ($data->isInitialized('sourceMinPort') && null !== $data->getSourceMinPort()) {
            $dataArray['sourceMinPort'] = $data->getSourceMinPort();
        }
        if ($data->isInitialized('sourceMaxPort') && null !== $data->getSourceMaxPort()) {
            $dataArray['sourceMaxPort'] = $data->getSourceMaxPort();
        }
        if ($data->isInitialized('enableDestinationPortRange') && null !== $data->getEnableDestinationPortRange()) {
            $dataArray['enableDestinationPortRange'] = $data->getEnableDestinationPortRange();
        }
        if ($data->isInitialized('destinationMinPort') && null !== $data->getDestinationMinPort()) {
            $dataArray['destinationMinPort'] = $data->getDestinationMinPort();
        }
        if ($data->isInitialized('destinationMaxPort') && null !== $data->getDestinationMaxPort()) {
            $dataArray['destinationMaxPort'] = $data->getDestinationMaxPort();
        }
        if ($data->isInitialized('protocol') && null !== $data->getProtocol()) {
            $dataArray['protocol'] = $data->getProtocol();
        }
        if ($data->isInitialized('customProtocol') && null !== $data->getCustomProtocol()) {
            $dataArray['customProtocol'] = $data->getCustomProtocol();
        }
        if ($data->isInitialized('action') && null !== $data->getAction()) {
            $dataArray['action'] = $data->getAction();
        }
        if ($data->isInitialized('direction') && null !== $data->getDirection()) {
            $dataArray['direction'] = $data->getDirection();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIpAclRules::class => false];
    }
}