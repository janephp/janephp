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
class PullRequestSimpleLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\PullRequestSimpleLinks::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\PullRequestSimpleLinks::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\PullRequestSimpleLinks();
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
            $this->validate($data, new \Github\Validator\PullRequestSimpleLinksConstraint());
        }
        if (\array_key_exists('comments', $data)) {
            $object->setComments($this->denormalizer->denormalize($data['comments'], \Github\Model\Link::class, 'json', $context));
            unset($data['comments']);
        }
        if (\array_key_exists('commits', $data)) {
            $object->setCommits($this->denormalizer->denormalize($data['commits'], \Github\Model\Link::class, 'json', $context));
            unset($data['commits']);
        }
        if (\array_key_exists('statuses', $data)) {
            $object->setStatuses($this->denormalizer->denormalize($data['statuses'], \Github\Model\Link::class, 'json', $context));
            unset($data['statuses']);
        }
        if (\array_key_exists('html', $data)) {
            $object->setHtml($this->denormalizer->denormalize($data['html'], \Github\Model\Link::class, 'json', $context));
            unset($data['html']);
        }
        if (\array_key_exists('issue', $data)) {
            $object->setIssue($this->denormalizer->denormalize($data['issue'], \Github\Model\Link::class, 'json', $context));
            unset($data['issue']);
        }
        if (\array_key_exists('review_comments', $data)) {
            $object->setReviewComments($this->denormalizer->denormalize($data['review_comments'], \Github\Model\Link::class, 'json', $context));
            unset($data['review_comments']);
        }
        if (\array_key_exists('review_comment', $data)) {
            $object->setReviewComment($this->denormalizer->denormalize($data['review_comment'], \Github\Model\Link::class, 'json', $context));
            unset($data['review_comment']);
        }
        if (\array_key_exists('self', $data)) {
            $object->setSelf($this->denormalizer->denormalize($data['self'], \Github\Model\Link::class, 'json', $context));
            unset($data['self']);
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
        $dataArray['comments'] = $data->getComments() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getComments(), 'json', $context));
        $dataArray['commits'] = $data->getCommits() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getCommits(), 'json', $context));
        $dataArray['statuses'] = $data->getStatuses() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getStatuses(), 'json', $context));
        $dataArray['html'] = $data->getHtml() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getHtml(), 'json', $context));
        $dataArray['issue'] = $data->getIssue() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getIssue(), 'json', $context));
        $dataArray['review_comments'] = $data->getReviewComments() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getReviewComments(), 'json', $context));
        $dataArray['review_comment'] = $data->getReviewComment() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getReviewComment(), 'json', $context));
        $dataArray['self'] = $data->getSelf() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getSelf(), 'json', $context));
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\PullRequestSimpleLinksConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\PullRequestSimpleLinks::class => false];
    }
}