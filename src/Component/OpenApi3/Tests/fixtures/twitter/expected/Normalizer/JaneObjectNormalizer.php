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
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ContextAnnotation::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ContextAnnotationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ContextAnnotationDomainFields::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ContextAnnotationDomainFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ContextAnnotationEntityFields::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ContextAnnotationEntityFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\EntityIndices::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\EntityIndicesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\URLFields::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\URLFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\UrlEntity::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\UrlEntityNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\URLImage::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\URLImageNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\HashtagFields::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\HashtagFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\HashtagEntity::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\HashtagEntityNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CashtagFields::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CashtagFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CashtagEntity::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CashtagEntityNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MentionFields::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MentionFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MentionEntity::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MentionEntityNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\FullTextEntities::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\FullTextEntitiesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\FullTextEntitiesAnnotationsItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\FullTextEntitiesAnnotationsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\Error::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ErrorNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\Expansions::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ExpansionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CompactTweetFields::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CompactTweetFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CompactTweetFieldsReferencedTweetsItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CompactTweetFieldsReferencedTweetsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CompactTweetFieldsAttachments::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CompactTweetFieldsAttachmentsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultTweetFields::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DefaultTweetFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultTweetFieldsGeo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DefaultTweetFieldsGeoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedTweetFields::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DetailedTweetFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedTweetFieldsStats::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DetailedTweetFieldsStatsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CompactTweet::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CompactTweetNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultTweet::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DefaultTweetNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedTweet::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DetailedTweetNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CompactUserFields::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CompactUserFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultUserFields::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DefaultUserFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultUserFieldsEntities::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DefaultUserFieldsEntitiesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultUserFieldsEntitiesUrl::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DefaultUserFieldsEntitiesUrlNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedUserFields::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DetailedUserFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedUserFieldsStats::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DetailedUserFieldsStatsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CompactUser::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CompactUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultUser::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DefaultUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedUser::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DetailedUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\UserLookupResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\UserLookupResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\TweetLookupResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\TweetLookupResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SingleTweetLookupResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SingleTweetLookupResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\TweetMetricsResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\TweetMetricsResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\Point::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PointNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\Geo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\GeoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\Poll::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PollNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PollOption::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PollOptionNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonMediaFields::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonMediaFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\Photo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PhotoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\Video::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VideoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AnimatedGif::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AnimatedGifNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\TweetWithheld::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\TweetWithheldNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\UserWithheld::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\UserWithheldNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CompactPlaceFields::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CompactPlaceFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultPlaceFields::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DefaultPlaceFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedPlaceFields::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DetailedPlaceFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CompactPlace::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CompactPlaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultPlace::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DefaultPlaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedPlace::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DetailedPlaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProblemFields::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProblemFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\GenericProblem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\GenericProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\InvalidRequestProblem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\InvalidRequestProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\InvalidRequestProblemErrorsItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\InvalidRequestProblemErrorsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ResourceNotFoundProblem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ResourceNotFoundProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ResourceUnauthorizedProblem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ResourceUnauthorizedProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClientForbiddenProblem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClientForbiddenProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DisallowedResourceProblem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DisallowedResourceProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\UnsupportedAuthenticationProblem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\UnsupportedAuthenticationProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\UsageCapExceededProblem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\UsageCapExceededProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ConnectionExceptionProblem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ConnectionExceptionProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClientDisconnectedProblem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClientDisconnectedProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\OperationalDisconnectProblem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\OperationalDisconnectProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RulesCapProblem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RulesCapProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\InvalidRuleProblem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\InvalidRuleProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\TweetMetrics::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\TweetMetricsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\TweetInteractionMetrics::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\TweetInteractionMetricsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VideoMetrics::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VideoMetricsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\Rule::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RuleNoId::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RuleNoIdNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\GetRulesResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\GetRulesResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AddRulesRequest::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AddRulesRequestNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AddRulesResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AddRulesResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DeleteRulesRequest::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DeleteRulesRequestNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DeleteRulesResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DeleteRulesResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RulesResponseMetadata::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RulesResponseMetadataNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\TweetSearchResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\TweetSearchResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\TweetSearchResponseMeta::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\TweetSearchResponseMetaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\HideReplyRequest::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\HideReplyRequestNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\HideReplyResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\HideReplyResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\HideReplyResponseData::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\HideReplyResponseDataNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \Jane\Component\OpenApi3\Tests\Expected\Model\ContextAnnotation::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\ContextAnnotationDomainFields::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\ContextAnnotationEntityFields::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\EntityIndices::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\URLFields::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\UrlEntity::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\URLImage::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\HashtagFields::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\HashtagEntity::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\CashtagFields::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\CashtagEntity::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\MentionFields::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\MentionEntity::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\FullTextEntities::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\FullTextEntitiesAnnotationsItem::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\Error::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\Expansions::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\CompactTweetFields::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\CompactTweetFieldsReferencedTweetsItem::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\CompactTweetFieldsAttachments::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultTweetFields::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultTweetFieldsGeo::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedTweetFields::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedTweetFieldsStats::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\CompactTweet::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultTweet::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedTweet::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\CompactUserFields::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultUserFields::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultUserFieldsEntities::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultUserFieldsEntitiesUrl::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedUserFields::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedUserFieldsStats::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\CompactUser::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultUser::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedUser::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\UserLookupResponse::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\TweetLookupResponse::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\SingleTweetLookupResponse::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\TweetMetricsResponse::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\Point::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\Geo::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\Poll::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\PollOption::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\CommonMediaFields::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\Photo::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\Video::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\AnimatedGif::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\TweetWithheld::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\UserWithheld::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\CompactPlaceFields::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultPlaceFields::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedPlaceFields::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\CompactPlace::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultPlace::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedPlace::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\ProblemFields::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\GenericProblem::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\InvalidRequestProblem::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\InvalidRequestProblemErrorsItem::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\ResourceNotFoundProblem::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\ResourceUnauthorizedProblem::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\ClientForbiddenProblem::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DisallowedResourceProblem::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\UnsupportedAuthenticationProblem::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\UsageCapExceededProblem::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\ConnectionExceptionProblem::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\ClientDisconnectedProblem::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\OperationalDisconnectProblem::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\RulesCapProblem::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\InvalidRuleProblem::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\TweetMetrics::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\TweetInteractionMetrics::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\VideoMetrics::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\Rule::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\RuleNoId::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\GetRulesResponse::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\AddRulesRequest::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\AddRulesResponse::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DeleteRulesRequest::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\DeleteRulesResponse::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\RulesResponseMetadata::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\TweetSearchResponse::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\TweetSearchResponseMeta::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\HideReplyRequest::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\HideReplyResponse::class => false,
            \Jane\Component\OpenApi3\Tests\Expected\Model\HideReplyResponseData::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}