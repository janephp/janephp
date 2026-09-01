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
class ProfileDhcpOption82Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDhcpOption82::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDhcpOption82::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDhcpOption82();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dhcpOption82Enabled', $data) && \is_int($data['dhcpOption82Enabled'])) {
            $data['dhcpOption82Enabled'] = (bool) $data['dhcpOption82Enabled'];
        }
        if (\array_key_exists('subopt1Enabled', $data) && \is_int($data['subopt1Enabled'])) {
            $data['subopt1Enabled'] = (bool) $data['subopt1Enabled'];
        }
        if (\array_key_exists('subopt2Enabled', $data) && \is_int($data['subopt2Enabled'])) {
            $data['subopt2Enabled'] = (bool) $data['subopt2Enabled'];
        }
        if (\array_key_exists('subopt150Enabled', $data) && \is_int($data['subopt150Enabled'])) {
            $data['subopt150Enabled'] = (bool) $data['subopt150Enabled'];
        }
        if (\array_key_exists('subopt151Enabled', $data) && \is_int($data['subopt151Enabled'])) {
            $data['subopt151Enabled'] = (bool) $data['subopt151Enabled'];
        }
        if (\array_key_exists('dhcpOption82Enabled', $data)) {
            $object->dhcpOption82Enabled = $data['dhcpOption82Enabled'];
        }
        if (\array_key_exists('subopt1Enabled', $data)) {
            $object->subopt1Enabled = $data['subopt1Enabled'];
        }
        if (\array_key_exists('subopt1Format', $data)) {
            $object->subopt1Format = $data['subopt1Format'];
        }
        if (\array_key_exists('subopt2Enabled', $data)) {
            $object->subopt2Enabled = $data['subopt2Enabled'];
        }
        if (\array_key_exists('subopt2Format', $data)) {
            $object->subopt2Format = $data['subopt2Format'];
        }
        if (\array_key_exists('subopt150Enabled', $data)) {
            $object->subopt150Enabled = $data['subopt150Enabled'];
        }
        if (\array_key_exists('subopt151Enabled', $data)) {
            $object->subopt151Enabled = $data['subopt151Enabled'];
        }
        if (\array_key_exists('subopt151Format', $data)) {
            $object->subopt151Format = $data['subopt151Format'];
        }
        if (\array_key_exists('subopt151AreaName', $data)) {
            $object->subopt151AreaName = $data['subopt151AreaName'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('dhcpOption82Enabled', get_object_vars($data)) && null !== ($data->dhcpOption82Enabled ?? null)) {
            $dataArray['dhcpOption82Enabled'] = $data->dhcpOption82Enabled ?? null;
        }
        if (array_key_exists('subopt1Enabled', get_object_vars($data)) && null !== ($data->subopt1Enabled ?? null)) {
            $dataArray['subopt1Enabled'] = $data->subopt1Enabled ?? null;
        }
        if (array_key_exists('subopt1Format', get_object_vars($data)) && null !== ($data->subopt1Format ?? null)) {
            $dataArray['subopt1Format'] = $data->subopt1Format ?? null;
        }
        if (array_key_exists('subopt2Enabled', get_object_vars($data)) && null !== ($data->subopt2Enabled ?? null)) {
            $dataArray['subopt2Enabled'] = $data->subopt2Enabled ?? null;
        }
        if (array_key_exists('subopt2Format', get_object_vars($data)) && null !== ($data->subopt2Format ?? null)) {
            $dataArray['subopt2Format'] = $data->subopt2Format ?? null;
        }
        if (array_key_exists('subopt150Enabled', get_object_vars($data)) && null !== ($data->subopt150Enabled ?? null)) {
            $dataArray['subopt150Enabled'] = $data->subopt150Enabled ?? null;
        }
        if (array_key_exists('subopt151Enabled', get_object_vars($data)) && null !== ($data->subopt151Enabled ?? null)) {
            $dataArray['subopt151Enabled'] = $data->subopt151Enabled ?? null;
        }
        if (array_key_exists('subopt151Format', get_object_vars($data)) && null !== ($data->subopt151Format ?? null)) {
            $dataArray['subopt151Format'] = $data->subopt151Format ?? null;
        }
        if (array_key_exists('subopt151AreaName', get_object_vars($data)) && null !== ($data->subopt151AreaName ?? null)) {
            $dataArray['subopt151AreaName'] = $data->subopt151AreaName ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDhcpOption82::class => false];
    }
}