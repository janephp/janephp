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
class ReposOwnerRepoPullsPullNumberCommentsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ReposOwnerRepoPullsPullNumberCommentsPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoPullsPullNumberCommentsPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\ReposOwnerRepoPullsPullNumberCommentsPostBody();
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
            $this->validate($data, new \Github\Validator\ReposOwnerRepoPullsPullNumberCommentsPostBodyConstraint());
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
            unset($data['body']);
        }
        if (\array_key_exists('commit_id', $data)) {
            $object->setCommitId($data['commit_id']);
            unset($data['commit_id']);
        }
        if (\array_key_exists('path', $data)) {
            $object->setPath($data['path']);
            unset($data['path']);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($data['position']);
            unset($data['position']);
        }
        if (\array_key_exists('side', $data)) {
            $object->setSide($data['side']);
            unset($data['side']);
        }
        if (\array_key_exists('line', $data)) {
            $object->setLine($data['line']);
            unset($data['line']);
        }
        if (\array_key_exists('start_line', $data)) {
            $object->setStartLine($data['start_line']);
            unset($data['start_line']);
        }
        if (\array_key_exists('start_side', $data)) {
            $object->setStartSide($data['start_side']);
            unset($data['start_side']);
        }
        if (\array_key_exists('in_reply_to', $data)) {
            $object->setInReplyTo($data['in_reply_to']);
            unset($data['in_reply_to']);
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
        $dataArray['body'] = $data->getBody();
        if ($data->isInitialized('commitId') && null !== $data->getCommitId()) {
            $dataArray['commit_id'] = $data->getCommitId();
        }
        $dataArray['path'] = $data->getPath();
        if ($data->isInitialized('position') && null !== $data->getPosition()) {
            $dataArray['position'] = $data->getPosition();
        }
        if ($data->isInitialized('side') && null !== $data->getSide()) {
            $dataArray['side'] = $data->getSide();
        }
        if ($data->isInitialized('line') && null !== $data->getLine()) {
            $dataArray['line'] = $data->getLine();
        }
        if ($data->isInitialized('startLine') && null !== $data->getStartLine()) {
            $dataArray['start_line'] = $data->getStartLine();
        }
        if ($data->isInitialized('startSide') && null !== $data->getStartSide()) {
            $dataArray['start_side'] = $data->getStartSide();
        }
        if ($data->isInitialized('inReplyTo') && null !== $data->getInReplyTo()) {
            $dataArray['in_reply_to'] = $data->getInReplyTo();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ReposOwnerRepoPullsPullNumberCommentsPostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ReposOwnerRepoPullsPullNumberCommentsPostBody::class => false];
    }
}