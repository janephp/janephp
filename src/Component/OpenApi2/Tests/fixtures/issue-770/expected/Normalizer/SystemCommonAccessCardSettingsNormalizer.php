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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemCommonAccessCardSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('cacAuthEnabled', $data) && \is_int($data['cacAuthEnabled'])) {
            $data['cacAuthEnabled'] = (bool) $data['cacAuthEnabled'];
        }
        if (\array_key_exists('cacAuthEnabled', $data)) {
            $object->cacAuthEnabled = $data['cacAuthEnabled'];
        }
        if (\array_key_exists('cacAuthOcspServerUri', $data)) {
            $object->cacAuthOcspServerUri = $data['cacAuthOcspServerUri'];
        }
        if (\array_key_exists('cacAuthRootCACertificate', $data)) {
            $object->cacAuthRootCACertificate = $data['cacAuthRootCACertificate'];
        }
        if (\array_key_exists('cacAuthUserName', $data)) {
            $object->cacAuthUserName = $data['cacAuthUserName'];
        }
        if (\array_key_exists('cacAuthAaaServer', $data)) {
            $object->cacAuthAaaServer = $data['cacAuthAaaServer'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('cacAuthEnabled', get_object_vars($data)) && null !== ($data->cacAuthEnabled ?? null)) {
            $dataArray['cacAuthEnabled'] = $data->cacAuthEnabled ?? null;
        }
        if (array_key_exists('cacAuthOcspServerUri', get_object_vars($data)) && null !== ($data->cacAuthOcspServerUri ?? null)) {
            $dataArray['cacAuthOcspServerUri'] = $data->cacAuthOcspServerUri ?? null;
        }
        if (array_key_exists('cacAuthRootCACertificate', get_object_vars($data)) && null !== ($data->cacAuthRootCACertificate ?? null)) {
            $dataArray['cacAuthRootCACertificate'] = $data->cacAuthRootCACertificate ?? null;
        }
        if (array_key_exists('cacAuthUserName', get_object_vars($data)) && null !== ($data->cacAuthUserName ?? null)) {
            $dataArray['cacAuthUserName'] = $data->cacAuthUserName ?? null;
        }
        if (array_key_exists('cacAuthAaaServer', get_object_vars($data)) && null !== ($data->cacAuthAaaServer ?? null)) {
            $dataArray['cacAuthAaaServer'] = $data->cacAuthAaaServer ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemCommonAccessCardSettings::class => false];
    }
}