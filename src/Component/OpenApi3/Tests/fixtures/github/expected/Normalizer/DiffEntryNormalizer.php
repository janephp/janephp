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
class DiffEntryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\DiffEntry::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\DiffEntry::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\DiffEntry();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\DiffEntryConstraint());
        }
        if (\array_key_exists('sha', $data)) {
            $object->setSha($data['sha']);
            unset($data['sha']);
        }
        if (\array_key_exists('filename', $data)) {
            $object->setFilename($data['filename']);
            unset($data['filename']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('additions', $data)) {
            $object->setAdditions($data['additions']);
            unset($data['additions']);
        }
        if (\array_key_exists('deletions', $data)) {
            $object->setDeletions($data['deletions']);
            unset($data['deletions']);
        }
        if (\array_key_exists('changes', $data)) {
            $object->setChanges($data['changes']);
            unset($data['changes']);
        }
        if (\array_key_exists('blob_url', $data)) {
            $object->setBlobUrl($data['blob_url']);
            unset($data['blob_url']);
        }
        if (\array_key_exists('raw_url', $data)) {
            $object->setRawUrl($data['raw_url']);
            unset($data['raw_url']);
        }
        if (\array_key_exists('contents_url', $data)) {
            $object->setContentsUrl($data['contents_url']);
            unset($data['contents_url']);
        }
        if (\array_key_exists('patch', $data)) {
            $object->setPatch($data['patch']);
            unset($data['patch']);
        }
        if (\array_key_exists('previous_filename', $data)) {
            $object->setPreviousFilename($data['previous_filename']);
            unset($data['previous_filename']);
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
        $dataArray['sha'] = $data->getSha();
        $dataArray['filename'] = $data->getFilename();
        $dataArray['status'] = $data->getStatus();
        $dataArray['additions'] = $data->getAdditions();
        $dataArray['deletions'] = $data->getDeletions();
        $dataArray['changes'] = $data->getChanges();
        $dataArray['blob_url'] = $data->getBlobUrl();
        $dataArray['raw_url'] = $data->getRawUrl();
        $dataArray['contents_url'] = $data->getContentsUrl();
        if ($data->isInitialized('patch') && null !== $data->getPatch()) {
            $dataArray['patch'] = $data->getPatch();
        }
        if ($data->isInitialized('previousFilename') && null !== $data->getPreviousFilename()) {
            $dataArray['previous_filename'] = $data->getPreviousFilename();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\DiffEntryConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\DiffEntry::class => false];
    }
}