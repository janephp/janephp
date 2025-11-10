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
class SystemModifyLwapp2scgNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyLwapp2scg::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyLwapp2scg::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyLwapp2scg();
        if (\array_key_exists('natIpTranslation', $data) && \is_int($data['natIpTranslation'])) {
            $data['natIpTranslation'] = (bool) $data['natIpTranslation'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('policy', $data)) {
            $object->setPolicy($data['policy']);
        }
        if (\array_key_exists('pasvMaxPort', $data)) {
            $object->setPasvMaxPort($data['pasvMaxPort']);
        }
        if (\array_key_exists('pasvMinPort', $data)) {
            $object->setPasvMinPort($data['pasvMinPort']);
        }
        if (\array_key_exists('apList', $data)) {
            $values = [];
            foreach ($data['apList'] as $value) {
                $values[] = $value;
            }
            $object->setApList($values);
        }
        if (\array_key_exists('natIpTranslation', $data)) {
            $object->setNatIpTranslation($data['natIpTranslation']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('policy') && null !== $data->getPolicy()) {
            $dataArray['policy'] = $data->getPolicy();
        }
        if ($data->isInitialized('pasvMaxPort') && null !== $data->getPasvMaxPort()) {
            $dataArray['pasvMaxPort'] = $data->getPasvMaxPort();
        }
        if ($data->isInitialized('pasvMinPort') && null !== $data->getPasvMinPort()) {
            $dataArray['pasvMinPort'] = $data->getPasvMinPort();
        }
        if ($data->isInitialized('apList') && null !== $data->getApList()) {
            $values = [];
            foreach ($data->getApList() as $value) {
                $values[] = $value;
            }
            $dataArray['apList'] = $values;
        }
        if ($data->isInitialized('natIpTranslation') && null !== $data->getNatIpTranslation()) {
            $dataArray['natIpTranslation'] = $data->getNatIpTranslation();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyLwapp2scg::class => false];
    }
}