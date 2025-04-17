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
class ProtectedBranchRequiredPullRequestReviewsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ProtectedBranchRequiredPullRequestReviews::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ProtectedBranchRequiredPullRequestReviews::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ProtectedBranchRequiredPullRequestReviews();
        if (\array_key_exists('dismiss_stale_reviews', $data) && \is_int($data['dismiss_stale_reviews'])) {
            $data['dismiss_stale_reviews'] = (bool) $data['dismiss_stale_reviews'];
        }
        if (\array_key_exists('require_code_owner_reviews', $data) && \is_int($data['require_code_owner_reviews'])) {
            $data['require_code_owner_reviews'] = (bool) $data['require_code_owner_reviews'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ProtectedBranchRequiredPullRequestReviewsConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('dismiss_stale_reviews', $data)) {
            $object->setDismissStaleReviews($data['dismiss_stale_reviews']);
            unset($data['dismiss_stale_reviews']);
        }
        if (\array_key_exists('require_code_owner_reviews', $data)) {
            $object->setRequireCodeOwnerReviews($data['require_code_owner_reviews']);
            unset($data['require_code_owner_reviews']);
        }
        if (\array_key_exists('required_approving_review_count', $data)) {
            $object->setRequiredApprovingReviewCount($data['required_approving_review_count']);
            unset($data['required_approving_review_count']);
        }
        if (\array_key_exists('dismissal_restrictions', $data)) {
            $object->setDismissalRestrictions($this->denormalizer->denormalize($data['dismissal_restrictions'], \Github\Model\ProtectedBranchRequiredPullRequestReviewsDismissalRestrictions::class, 'json', $context));
            unset($data['dismissal_restrictions']);
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
        if ($data->isInitialized('dismissStaleReviews') && null !== $data->getDismissStaleReviews()) {
            $dataArray['dismiss_stale_reviews'] = $data->getDismissStaleReviews();
        }
        if ($data->isInitialized('requireCodeOwnerReviews') && null !== $data->getRequireCodeOwnerReviews()) {
            $dataArray['require_code_owner_reviews'] = $data->getRequireCodeOwnerReviews();
        }
        if ($data->isInitialized('requiredApprovingReviewCount') && null !== $data->getRequiredApprovingReviewCount()) {
            $dataArray['required_approving_review_count'] = $data->getRequiredApprovingReviewCount();
        }
        if ($data->isInitialized('dismissalRestrictions') && null !== $data->getDismissalRestrictions()) {
            $dataArray['dismissal_restrictions'] = $this->normalizer->normalize($data->getDismissalRestrictions(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ProtectedBranchRequiredPullRequestReviewsConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ProtectedBranchRequiredPullRequestReviews::class => false];
    }
}