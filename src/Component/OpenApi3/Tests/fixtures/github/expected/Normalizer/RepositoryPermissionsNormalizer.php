<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class RepositoryPermissionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\RepositoryPermissions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\RepositoryPermissions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\RepositoryPermissions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('admin', $data) && \is_int($data['admin'])) {
            $data['admin'] = (bool) $data['admin'];
        }
        if (\array_key_exists('pull', $data) && \is_int($data['pull'])) {
            $data['pull'] = (bool) $data['pull'];
        }
        if (\array_key_exists('triage', $data) && \is_int($data['triage'])) {
            $data['triage'] = (bool) $data['triage'];
        }
        if (\array_key_exists('push', $data) && \is_int($data['push'])) {
            $data['push'] = (bool) $data['push'];
        }
        if (\array_key_exists('maintain', $data) && \is_int($data['maintain'])) {
            $data['maintain'] = (bool) $data['maintain'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\RepositoryPermissionsConstraint());
        }
        if (\array_key_exists('admin', $data)) {
            $object->setAdmin($data['admin']);
            unset($data['admin']);
        }
        if (\array_key_exists('pull', $data)) {
            $object->setPull($data['pull']);
            unset($data['pull']);
        }
        if (\array_key_exists('triage', $data)) {
            $object->setTriage($data['triage']);
            unset($data['triage']);
        }
        if (\array_key_exists('push', $data)) {
            $object->setPush($data['push']);
            unset($data['push']);
        }
        if (\array_key_exists('maintain', $data)) {
            $object->setMaintain($data['maintain']);
            unset($data['maintain']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['admin'] = $data->getAdmin();
        $dataArray['pull'] = $data->getPull();
        if ($data->isInitialized('triage') && null !== $data->getTriage()) {
            $dataArray['triage'] = $data->getTriage();
        }
        $dataArray['push'] = $data->getPush();
        if ($data->isInitialized('maintain') && null !== $data->getMaintain()) {
            $dataArray['maintain'] = $data->getMaintain();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\RepositoryPermissionsConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\RepositoryPermissions::class => false];
    }
}