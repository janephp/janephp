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
class SystemCommonAccessCardSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemCommonAccessCardSettings::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemCommonAccessCardSettings::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemCommonAccessCardSettings();
        if (\array_key_exists('cacAuthEnabled', $data) && \is_int($data['cacAuthEnabled'])) {
            $data['cacAuthEnabled'] = (bool) $data['cacAuthEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cacAuthEnabled', $data)) {
            $object->setCacAuthEnabled($data['cacAuthEnabled']);
        }
        if (\array_key_exists('cacAuthOcspServerUri', $data)) {
            $object->setCacAuthOcspServerUri($data['cacAuthOcspServerUri']);
        }
        if (\array_key_exists('cacAuthRootCACertificate', $data)) {
            $object->setCacAuthRootCACertificate($data['cacAuthRootCACertificate']);
        }
        if (\array_key_exists('cacAuthUserName', $data)) {
            $object->setCacAuthUserName($data['cacAuthUserName']);
        }
        if (\array_key_exists('cacAuthAaaServer', $data)) {
            $object->setCacAuthAaaServer($data['cacAuthAaaServer']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('cacAuthEnabled') && null !== $data->getCacAuthEnabled()) {
            $dataArray['cacAuthEnabled'] = $data->getCacAuthEnabled();
        }
        if ($data->isInitialized('cacAuthOcspServerUri') && null !== $data->getCacAuthOcspServerUri()) {
            $dataArray['cacAuthOcspServerUri'] = $data->getCacAuthOcspServerUri();
        }
        if ($data->isInitialized('cacAuthRootCACertificate') && null !== $data->getCacAuthRootCACertificate()) {
            $dataArray['cacAuthRootCACertificate'] = $data->getCacAuthRootCACertificate();
        }
        if ($data->isInitialized('cacAuthUserName') && null !== $data->getCacAuthUserName()) {
            $dataArray['cacAuthUserName'] = $data->getCacAuthUserName();
        }
        if ($data->isInitialized('cacAuthAaaServer') && null !== $data->getCacAuthAaaServer()) {
            $dataArray['cacAuthAaaServer'] = $data->getCacAuthAaaServer();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemCommonAccessCardSettings::class => false];
    }
}