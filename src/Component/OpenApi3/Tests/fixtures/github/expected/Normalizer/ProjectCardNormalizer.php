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
class ProjectCardNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ProjectCard::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ProjectCard::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\ProjectCard();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('archived', $data) && \is_int($data['archived'])) {
            $data['archived'] = (bool) $data['archived'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ProjectCardConstraint());
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('note', $data) && $data['note'] !== null) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        elseif (\array_key_exists('note', $data) && $data['note'] === null) {
            $object->setNote(null);
            unset($data['note']);
        }
        if (\array_key_exists('creator', $data) && $data['creator'] !== null) {
            $object->setCreator($this->denormalizer->denormalize($data['creator'], \Github\Model\ProjectCardCreator::class, 'json', $context));
            unset($data['creator']);
        }
        elseif (\array_key_exists('creator', $data) && $data['creator'] === null) {
            $object->setCreator(null);
            unset($data['creator']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCreatedAt($date);
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_1) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setUpdatedAt($date_1);
            unset($data['updated_at']);
        }
        if (\array_key_exists('archived', $data)) {
            $object->setArchived($data['archived']);
            unset($data['archived']);
        }
        if (\array_key_exists('column_url', $data)) {
            $object->setColumnUrl($data['column_url']);
            unset($data['column_url']);
        }
        if (\array_key_exists('content_url', $data)) {
            $object->setContentUrl($data['content_url']);
            unset($data['content_url']);
        }
        if (\array_key_exists('project_url', $data)) {
            $object->setProjectUrl($data['project_url']);
            unset($data['project_url']);
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
        $dataArray['url'] = $data->getUrl();
        $dataArray['id'] = $data->getId();
        $dataArray['node_id'] = $data->getNodeId();
        $dataArray['note'] = $data->getNote();
        $dataArray['creator'] = $data->getCreator() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getCreator(), 'json', $context));
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('archived') && null !== $data->getArchived()) {
            $dataArray['archived'] = $data->getArchived();
        }
        $dataArray['column_url'] = $data->getColumnUrl();
        if ($data->isInitialized('contentUrl') && null !== $data->getContentUrl()) {
            $dataArray['content_url'] = $data->getContentUrl();
        }
        $dataArray['project_url'] = $data->getProjectUrl();
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ProjectCardConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ProjectCard::class => false];
    }
}