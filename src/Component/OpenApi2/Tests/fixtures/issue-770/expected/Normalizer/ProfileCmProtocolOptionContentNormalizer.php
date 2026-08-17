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
class ProfileCmProtocolOptionContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCmProtocolOptionContent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCmProtocolOptionContent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCmProtocolOptionContent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('cmpDhcpOpt43Subcode', $data) && \is_int($data['cmpDhcpOpt43Subcode'])) {
            $data['cmpDhcpOpt43Subcode'] = (float) $data['cmpDhcpOpt43Subcode'];
        }
        if (\array_key_exists('cmpDhcpOpt43SubcodeRecipient', $data) && \is_int($data['cmpDhcpOpt43SubcodeRecipient'])) {
            $data['cmpDhcpOpt43SubcodeRecipient'] = (float) $data['cmpDhcpOpt43SubcodeRecipient'];
        }
        if (\array_key_exists('cmpDhcpOpt43Subcode', $data)) {
            $object->setCmpDhcpOpt43Subcode($data['cmpDhcpOpt43Subcode']);
        }
        if (\array_key_exists('cmpServerAddr', $data)) {
            $object->setCmpServerAddr($data['cmpServerAddr']);
        }
        if (\array_key_exists('cmpServerPath', $data)) {
            $object->setCmpServerPath($data['cmpServerPath']);
        }
        if (\array_key_exists('cmpDhcpOpt43SubcodeRecipient', $data)) {
            $object->setCmpDhcpOpt43SubcodeRecipient($data['cmpDhcpOpt43SubcodeRecipient']);
        }
        if (\array_key_exists('cmpRecipient', $data)) {
            $object->setCmpRecipient($data['cmpRecipient']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['cmpDhcpOpt43Subcode'] = $data->getCmpDhcpOpt43Subcode();
        if ($data->isInitialized('cmpServerAddr') && null !== $data->getCmpServerAddr()) {
            $dataArray['cmpServerAddr'] = $data->getCmpServerAddr();
        }
        if ($data->isInitialized('cmpServerPath') && null !== $data->getCmpServerPath()) {
            $dataArray['cmpServerPath'] = $data->getCmpServerPath();
        }
        if ($data->isInitialized('cmpDhcpOpt43SubcodeRecipient') && null !== $data->getCmpDhcpOpt43SubcodeRecipient()) {
            $dataArray['cmpDhcpOpt43SubcodeRecipient'] = $data->getCmpDhcpOpt43SubcodeRecipient();
        }
        if ($data->isInitialized('cmpRecipient') && null !== $data->getCmpRecipient()) {
            $dataArray['cmpRecipient'] = $data->getCmpRecipient();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCmProtocolOptionContent::class => false];
    }
}
