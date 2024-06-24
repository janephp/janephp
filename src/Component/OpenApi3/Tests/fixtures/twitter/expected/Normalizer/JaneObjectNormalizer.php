<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = array(
            
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotation' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ContextAnnotationNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotationDomainFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ContextAnnotationDomainFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotationEntityFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ContextAnnotationEntityFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\EntityIndices' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\EntityIndicesNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\URLFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\URLFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UrlEntity' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\UrlEntityNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\URLImage' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\URLImageNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HashtagFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\HashtagFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HashtagEntity' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\HashtagEntityNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CashtagFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CashtagFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CashtagEntity' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CashtagEntityNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\MentionFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\MentionFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\MentionEntity' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\MentionEntityNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntities' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\FullTextEntitiesNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntitiesAnnotationsItem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\FullTextEntitiesAnnotationsItemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Error' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ErrorNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Expansions' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ExpansionsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactTweetFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsReferencedTweetsItem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactTweetFieldsReferencedTweetsItemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactTweetFieldsAttachmentsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultTweetFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultTweetFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultTweetFieldsGeo' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultTweetFieldsGeoNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweetFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedTweetFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweetFieldsStats' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedTweetFieldsStatsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweet' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactTweetNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultTweet' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultTweetNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweet' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedTweetNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactUserFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactUserFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultUserFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultUserFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultUserFieldsEntities' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultUserFieldsEntitiesNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultUserFieldsEntitiesUrl' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultUserFieldsEntitiesUrlNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedUserFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedUserFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedUserFieldsStats' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedUserFieldsStatsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactUser' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactUserNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultUser' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultUserNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedUser' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedUserNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UserLookupResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\UserLookupResponseNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetLookupResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetLookupResponseNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\SingleTweetLookupResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\SingleTweetLookupResponseNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetMetricsResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetMetricsResponseNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Point' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\PointNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Geo' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\GeoNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Poll' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\PollNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\PollOption' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\PollOptionNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CommonMediaFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CommonMediaFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Photo' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\PhotoNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Video' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\VideoNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\AnimatedGif' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\AnimatedGifNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetWithheld' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetWithheldNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UserWithheld' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\UserWithheldNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactPlaceFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactPlaceFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultPlaceFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultPlaceFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedPlaceFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedPlaceFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactPlace' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactPlaceNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultPlace' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultPlaceNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedPlace' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedPlaceNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ProblemFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ProblemFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\GenericProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\GenericProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRequestProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\InvalidRequestProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRequestProblemErrorsItem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\InvalidRequestProblemErrorsItemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ResourceNotFoundProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ResourceNotFoundProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ResourceUnauthorizedProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ResourceUnauthorizedProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ClientForbiddenProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ClientForbiddenProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DisallowedResourceProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DisallowedResourceProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UnsupportedAuthenticationProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\UnsupportedAuthenticationProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UsageCapExceededProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\UsageCapExceededProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ConnectionExceptionProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ConnectionExceptionProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ClientDisconnectedProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ClientDisconnectedProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\OperationalDisconnectProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\OperationalDisconnectProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\RulesCapProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\RulesCapProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRuleProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\InvalidRuleProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetMetrics' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetMetricsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetInteractionMetrics' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetInteractionMetricsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\VideoMetrics' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\VideoMetricsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Rule' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\RuleNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\RuleNoId' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\RuleNoIdNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\GetRulesResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\GetRulesResponseNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\AddRulesRequest' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\AddRulesRequestNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\AddRulesResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\AddRulesResponseNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DeleteRulesRequest' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DeleteRulesRequestNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DeleteRulesResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DeleteRulesResponseNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\RulesResponseMetadata' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\RulesResponseMetadataNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetSearchResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetSearchResponseNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetSearchResponseMeta' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetSearchResponseMetaNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HideReplyRequest' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\HideReplyRequestNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HideReplyResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\HideReplyResponseNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HideReplyResponseData' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\HideReplyResponseDataNormalizer',
            '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Jane\\Component\\OpenApi3\\Tests\\Expected\\Runtime\\Normalizer\\ReferenceNormalizer',
        ), $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []) : bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotation' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotationDomainFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotationEntityFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\EntityIndices' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\URLFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UrlEntity' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\URLImage' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HashtagFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HashtagEntity' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CashtagFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CashtagEntity' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\MentionFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\MentionEntity' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntities' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntitiesAnnotationsItem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Error' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Expansions' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsReferencedTweetsItem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultTweetFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultTweetFieldsGeo' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweetFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweetFieldsStats' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweet' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultTweet' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweet' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactUserFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultUserFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultUserFieldsEntities' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultUserFieldsEntitiesUrl' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedUserFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedUserFieldsStats' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactUser' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultUser' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedUser' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UserLookupResponse' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetLookupResponse' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\SingleTweetLookupResponse' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetMetricsResponse' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Point' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Geo' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Poll' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\PollOption' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CommonMediaFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Photo' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Video' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\AnimatedGif' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetWithheld' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UserWithheld' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactPlaceFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultPlaceFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedPlaceFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactPlace' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultPlace' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedPlace' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ProblemFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\GenericProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRequestProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRequestProblemErrorsItem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ResourceNotFoundProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ResourceUnauthorizedProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ClientForbiddenProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DisallowedResourceProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UnsupportedAuthenticationProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UsageCapExceededProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ConnectionExceptionProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ClientDisconnectedProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\OperationalDisconnectProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\RulesCapProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRuleProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetMetrics' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetInteractionMetrics' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\VideoMetrics' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Rule' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\RuleNoId' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\GetRulesResponse' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\AddRulesRequest' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\AddRulesResponse' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DeleteRulesRequest' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DeleteRulesResponse' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\RulesResponseMetadata' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetSearchResponse' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetSearchResponseMeta' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HideReplyRequest' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HideReplyResponse' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HideReplyResponseData' => false, '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => false];
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = array(
            
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotation' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ContextAnnotationNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotationDomainFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ContextAnnotationDomainFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotationEntityFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ContextAnnotationEntityFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\EntityIndices' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\EntityIndicesNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\URLFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\URLFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UrlEntity' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\UrlEntityNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\URLImage' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\URLImageNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HashtagFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\HashtagFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HashtagEntity' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\HashtagEntityNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CashtagFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CashtagFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CashtagEntity' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CashtagEntityNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\MentionFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\MentionFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\MentionEntity' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\MentionEntityNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntities' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\FullTextEntitiesNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntitiesAnnotationsItem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\FullTextEntitiesAnnotationsItemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Error' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ErrorNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Expansions' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ExpansionsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactTweetFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsReferencedTweetsItem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactTweetFieldsReferencedTweetsItemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactTweetFieldsAttachmentsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultTweetFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultTweetFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultTweetFieldsGeo' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultTweetFieldsGeoNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweetFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedTweetFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweetFieldsStats' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedTweetFieldsStatsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweet' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactTweetNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultTweet' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultTweetNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweet' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedTweetNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactUserFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactUserFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultUserFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultUserFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultUserFieldsEntities' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultUserFieldsEntitiesNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultUserFieldsEntitiesUrl' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultUserFieldsEntitiesUrlNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedUserFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedUserFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedUserFieldsStats' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedUserFieldsStatsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactUser' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactUserNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultUser' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultUserNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedUser' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedUserNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UserLookupResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\UserLookupResponseNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetLookupResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetLookupResponseNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\SingleTweetLookupResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\SingleTweetLookupResponseNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetMetricsResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetMetricsResponseNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Point' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\PointNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Geo' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\GeoNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Poll' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\PollNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\PollOption' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\PollOptionNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CommonMediaFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CommonMediaFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Photo' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\PhotoNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Video' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\VideoNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\AnimatedGif' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\AnimatedGifNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetWithheld' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetWithheldNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UserWithheld' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\UserWithheldNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactPlaceFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactPlaceFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultPlaceFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultPlaceFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedPlaceFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedPlaceFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactPlace' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactPlaceNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultPlace' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultPlaceNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedPlace' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedPlaceNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ProblemFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ProblemFieldsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\GenericProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\GenericProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRequestProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\InvalidRequestProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRequestProblemErrorsItem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\InvalidRequestProblemErrorsItemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ResourceNotFoundProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ResourceNotFoundProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ResourceUnauthorizedProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ResourceUnauthorizedProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ClientForbiddenProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ClientForbiddenProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DisallowedResourceProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DisallowedResourceProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UnsupportedAuthenticationProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\UnsupportedAuthenticationProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UsageCapExceededProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\UsageCapExceededProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ConnectionExceptionProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ConnectionExceptionProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ClientDisconnectedProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ClientDisconnectedProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\OperationalDisconnectProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\OperationalDisconnectProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\RulesCapProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\RulesCapProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRuleProblem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\InvalidRuleProblemNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetMetrics' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetMetricsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetInteractionMetrics' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetInteractionMetricsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\VideoMetrics' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\VideoMetricsNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Rule' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\RuleNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\RuleNoId' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\RuleNoIdNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\GetRulesResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\GetRulesResponseNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\AddRulesRequest' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\AddRulesRequestNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\AddRulesResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\AddRulesResponseNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DeleteRulesRequest' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DeleteRulesRequestNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DeleteRulesResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DeleteRulesResponseNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\RulesResponseMetadata' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\RulesResponseMetadataNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetSearchResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetSearchResponseNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetSearchResponseMeta' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetSearchResponseMetaNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HideReplyRequest' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\HideReplyRequestNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HideReplyResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\HideReplyResponseNormalizer',
            'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HideReplyResponseData' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\HideReplyResponseDataNormalizer',
            '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Jane\\Component\\OpenApi3\\Tests\\Expected\\Runtime\\Normalizer\\ReferenceNormalizer',
        ), $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []) : bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotation' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotationDomainFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotationEntityFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\EntityIndices' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\URLFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UrlEntity' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\URLImage' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HashtagFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HashtagEntity' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CashtagFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CashtagEntity' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\MentionFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\MentionEntity' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntities' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntitiesAnnotationsItem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Error' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Expansions' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsReferencedTweetsItem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultTweetFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultTweetFieldsGeo' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweetFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweetFieldsStats' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweet' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultTweet' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweet' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactUserFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultUserFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultUserFieldsEntities' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultUserFieldsEntitiesUrl' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedUserFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedUserFieldsStats' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactUser' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultUser' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedUser' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UserLookupResponse' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetLookupResponse' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\SingleTweetLookupResponse' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetMetricsResponse' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Point' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Geo' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Poll' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\PollOption' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CommonMediaFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Photo' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Video' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\AnimatedGif' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetWithheld' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UserWithheld' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactPlaceFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultPlaceFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedPlaceFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactPlace' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultPlace' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedPlace' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ProblemFields' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\GenericProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRequestProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRequestProblemErrorsItem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ResourceNotFoundProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ResourceUnauthorizedProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ClientForbiddenProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DisallowedResourceProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UnsupportedAuthenticationProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UsageCapExceededProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ConnectionExceptionProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ClientDisconnectedProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\OperationalDisconnectProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\RulesCapProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRuleProblem' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetMetrics' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetInteractionMetrics' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\VideoMetrics' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Rule' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\RuleNoId' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\GetRulesResponse' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\AddRulesRequest' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\AddRulesResponse' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DeleteRulesRequest' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DeleteRulesResponse' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\RulesResponseMetadata' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetSearchResponse' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetSearchResponseMeta' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HideReplyRequest' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HideReplyResponse' => false, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HideReplyResponseData' => false, '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => false];
        }
    }
}