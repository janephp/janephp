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
class SystemLwapp2scgConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemLwapp2scgConfiguration::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemLwapp2scgConfiguration::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemLwapp2scgConfiguration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('natIpTranslation', $data) && \is_int($data['natIpTranslation'])) {
            $data['natIpTranslation'] = (bool) $data['natIpTranslation'];
        }
        if (\array_key_exists('policy', $data)) {
            $object->policy = $data['policy'];
        }
        if (\array_key_exists('pasvMaxPort', $data)) {
            $object->pasvMaxPort = $data['pasvMaxPort'];
        }
        if (\array_key_exists('pasvMinPort', $data)) {
            $object->pasvMinPort = $data['pasvMinPort'];
        }
        if (\array_key_exists('apList', $data)) {
            $values = [];
            foreach ($data['apList'] as $value) {
                $values[] = $value;
            }
            $object->apList = $values;
        }
        if (\array_key_exists('acl', $data)) {
            $object->acl = $data['acl'];
        }
        if (\array_key_exists('natIpTranslation', $data)) {
            $object->natIpTranslation = $data['natIpTranslation'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('policy', get_object_vars($data)) && null !== ($data->policy ?? null)) {
            $dataArray['policy'] = $data->policy ?? null;
        }
        if (array_key_exists('pasvMaxPort', get_object_vars($data)) && null !== ($data->pasvMaxPort ?? null)) {
            $dataArray['pasvMaxPort'] = $data->pasvMaxPort ?? null;
        }
        if (array_key_exists('pasvMinPort', get_object_vars($data)) && null !== ($data->pasvMinPort ?? null)) {
            $dataArray['pasvMinPort'] = $data->pasvMinPort ?? null;
        }
        if (array_key_exists('apList', get_object_vars($data)) && null !== ($data->apList ?? null)) {
            $values = [];
            foreach ($data->apList ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['apList'] = $values;
        }
        if (array_key_exists('acl', get_object_vars($data)) && null !== ($data->acl ?? null)) {
            $dataArray['acl'] = $data->acl ?? null;
        }
        if (array_key_exists('natIpTranslation', get_object_vars($data)) && null !== ($data->natIpTranslation ?? null)) {
            $dataArray['natIpTranslation'] = $data->natIpTranslation ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemLwapp2scgConfiguration::class => false];
    }
}