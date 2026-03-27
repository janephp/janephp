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
class SyslogPriorityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SyslogPriority::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SyslogPriority::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SyslogPriority();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('critical', $data)) {
            $object->setCritical($data['critical']);
        }
        if (\array_key_exists('major', $data)) {
            $object->setMajor($data['major']);
        }
        if (\array_key_exists('minor', $data)) {
            $object->setMinor($data['minor']);
        }
        if (\array_key_exists('warning', $data)) {
            $object->setWarning($data['warning']);
        }
        if (\array_key_exists('informational', $data)) {
            $object->setInformational($data['informational']);
        }
        if (\array_key_exists('debug', $data)) {
            $object->setDebug($data['debug']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('critical') && null !== $data->getCritical()) {
            $dataArray['critical'] = $data->getCritical();
        }
        if ($data->isInitialized('major') && null !== $data->getMajor()) {
            $dataArray['major'] = $data->getMajor();
        }
        if ($data->isInitialized('minor') && null !== $data->getMinor()) {
            $dataArray['minor'] = $data->getMinor();
        }
        if ($data->isInitialized('warning') && null !== $data->getWarning()) {
            $dataArray['warning'] = $data->getWarning();
        }
        if ($data->isInitialized('informational') && null !== $data->getInformational()) {
            $dataArray['informational'] = $data->getInformational();
        }
        if ($data->isInitialized('debug') && null !== $data->getDebug()) {
            $dataArray['debug'] = $data->getDebug();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SyslogPriority::class => false];
    }
}