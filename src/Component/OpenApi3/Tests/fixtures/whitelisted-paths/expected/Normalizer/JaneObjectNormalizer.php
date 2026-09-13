<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\ValidatorTrait;
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
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\ContextAnnotation::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ContextAnnotationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\ContextAnnotationDomainFields::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ContextAnnotationDomainFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\ContextAnnotationEntityFields::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ContextAnnotationEntityFieldsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\UrlEntity::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\UrlEntityNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\URLImage::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\URLImageNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\HashtagEntity::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\HashtagEntityNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\CashtagEntity::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\CashtagEntityNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\MentionEntity::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\MentionEntityNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\FullTextEntities::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\FullTextEntitiesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\FullTextEntitiesAnnotationsItem::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\FullTextEntitiesAnnotationsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\Error::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ErrorNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\Expansions::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ExpansionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\CompactTweetFieldsReferencedTweetsItem::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\CompactTweetFieldsReferencedTweetsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\CompactTweetFieldsAttachments::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\CompactTweetFieldsAttachmentsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DefaultTweetFieldsGeo::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DefaultTweetFieldsGeoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DetailedTweetFieldsStats::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DetailedTweetFieldsStatsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\CompactTweet::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\CompactTweetNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DefaultTweet::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DefaultTweetNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DetailedTweet::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DetailedTweetNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DefaultUserFieldsEntities::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DefaultUserFieldsEntitiesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DefaultUserFieldsEntitiesUrl::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DefaultUserFieldsEntitiesUrlNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DetailedUserFieldsStats::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DetailedUserFieldsStatsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\CompactUser::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\CompactUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DefaultUser::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DefaultUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DetailedUser::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DetailedUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\TweetLookupResponse::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\TweetLookupResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\Point::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\PointNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\Geo::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\GeoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\Poll::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\PollNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\PollOption::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\PollOptionNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\Photo::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\PhotoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\Video::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\VideoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\AnimatedGif::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\AnimatedGifNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\TweetWithheld::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\TweetWithheldNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\UserWithheld::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\UserWithheldNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\CompactPlace::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\CompactPlaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DefaultPlace::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DefaultPlaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DetailedPlace::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DetailedPlaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\GenericProblem::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\GenericProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\InvalidRequestProblem::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\InvalidRequestProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\InvalidRequestProblemErrorsItem::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\InvalidRequestProblemErrorsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\ResourceNotFoundProblem::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ResourceNotFoundProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\ResourceUnauthorizedProblem::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ResourceUnauthorizedProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\ClientForbiddenProblem::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ClientForbiddenProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DisallowedResourceProblem::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DisallowedResourceProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\UnsupportedAuthenticationProblem::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\UnsupportedAuthenticationProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\UsageCapExceededProblem::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\UsageCapExceededProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\ConnectionExceptionProblem::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ConnectionExceptionProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\ClientDisconnectedProblem::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ClientDisconnectedProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\OperationalDisconnectProblem::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\OperationalDisconnectProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\RulesCapProblem::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\RulesCapProblemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\InvalidRuleProblem::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\InvalidRuleProblemNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\ReferenceNormalizer::class,
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
        $normalizer = match ($normalizerClass) {
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ContextAnnotationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ContextAnnotationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ContextAnnotationDomainFieldsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ContextAnnotationDomainFieldsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ContextAnnotationEntityFieldsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ContextAnnotationEntityFieldsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\UrlEntityNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\UrlEntityNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\URLImageNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\URLImageNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\HashtagEntityNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\HashtagEntityNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\CashtagEntityNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\CashtagEntityNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\MentionEntityNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\MentionEntityNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\FullTextEntitiesNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\FullTextEntitiesNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\FullTextEntitiesAnnotationsItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\FullTextEntitiesAnnotationsItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ErrorNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ErrorNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ExpansionsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ExpansionsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\CompactTweetFieldsReferencedTweetsItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\CompactTweetFieldsReferencedTweetsItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\CompactTweetFieldsAttachmentsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\CompactTweetFieldsAttachmentsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DefaultTweetFieldsGeoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DefaultTweetFieldsGeoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DetailedTweetFieldsStatsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DetailedTweetFieldsStatsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\CompactTweetNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\CompactTweetNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DefaultTweetNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DefaultTweetNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DetailedTweetNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DetailedTweetNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DefaultUserFieldsEntitiesNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DefaultUserFieldsEntitiesNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DefaultUserFieldsEntitiesUrlNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DefaultUserFieldsEntitiesUrlNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DetailedUserFieldsStatsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DetailedUserFieldsStatsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\CompactUserNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\CompactUserNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DefaultUserNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DefaultUserNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DetailedUserNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DetailedUserNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\TweetLookupResponseNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\TweetLookupResponseNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\PointNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\PointNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\GeoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\GeoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\PollNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\PollNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\PollOptionNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\PollOptionNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\PhotoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\PhotoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\VideoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\VideoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\AnimatedGifNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\AnimatedGifNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\TweetWithheldNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\TweetWithheldNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\UserWithheldNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\UserWithheldNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\CompactPlaceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\CompactPlaceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DefaultPlaceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DefaultPlaceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DetailedPlaceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DetailedPlaceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\GenericProblemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\GenericProblemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\InvalidRequestProblemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\InvalidRequestProblemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\InvalidRequestProblemErrorsItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\InvalidRequestProblemErrorsItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ResourceNotFoundProblemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ResourceNotFoundProblemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ResourceUnauthorizedProblemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ResourceUnauthorizedProblemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ClientForbiddenProblemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ClientForbiddenProblemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DisallowedResourceProblemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\DisallowedResourceProblemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\UnsupportedAuthenticationProblemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\UnsupportedAuthenticationProblemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\UsageCapExceededProblemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\UsageCapExceededProblemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ConnectionExceptionProblemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ConnectionExceptionProblemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ClientDisconnectedProblemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\ClientDisconnectedProblemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\OperationalDisconnectProblemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\OperationalDisconnectProblemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\RulesCapProblemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\RulesCapProblemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\InvalidRuleProblemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer\InvalidRuleProblemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\ReferenceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\ReferenceNormalizer(),
            default => throw new \InvalidArgumentException('Unknown normalizer class: ' . $normalizerClass),
        };
        if ($normalizer instanceof \Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface) {
            $normalizer->setNormalizer($this->normalizer);
        }
        if ($normalizer instanceof \Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface) {
            $normalizer->setDenormalizer($this->denormalizer);
        }
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}