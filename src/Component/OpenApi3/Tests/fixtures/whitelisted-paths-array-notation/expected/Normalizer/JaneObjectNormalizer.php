<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer\CheckArray;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer\ValidatorTrait;
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
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ContextAnnotation::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\ContextAnnotationNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ContextAnnotationDomainFields::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\ContextAnnotationDomainFieldsNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ContextAnnotationEntityFields::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\ContextAnnotationEntityFieldsNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\UrlEntity::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\UrlEntityNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\URLImage::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\URLImageNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\HashtagEntity::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\HashtagEntityNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\CashtagEntity::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\CashtagEntityNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\MentionEntity::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\MentionEntityNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\FullTextEntities::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\FullTextEntitiesNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\FullTextEntitiesAnnotationsItem::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\FullTextEntitiesAnnotationsItemNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Error::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\ErrorNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Expansions::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\ExpansionsNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\CompactTweetFieldsReferencedTweetsItem::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\CompactTweetFieldsReferencedTweetsItemNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\CompactTweetFieldsAttachments::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\CompactTweetFieldsAttachmentsNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DefaultTweetFieldsGeo::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\DefaultTweetFieldsGeoNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DetailedTweetFieldsStats::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\DetailedTweetFieldsStatsNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\CompactTweet::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\CompactTweetNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DefaultTweet::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\DefaultTweetNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DetailedTweet::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\DetailedTweetNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DefaultUserFieldsEntities::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\DefaultUserFieldsEntitiesNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DefaultUserFieldsEntitiesUrl::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\DefaultUserFieldsEntitiesUrlNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DetailedUserFieldsStats::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\DetailedUserFieldsStatsNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\CompactUser::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\CompactUserNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DefaultUser::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\DefaultUserNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DetailedUser::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\DetailedUserNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\TweetLookupResponse::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\TweetLookupResponseNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Point::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\PointNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Geo::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\GeoNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Poll::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\PollNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\PollOption::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\PollOptionNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Photo::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\PhotoNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Video::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\VideoNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\AnimatedGif::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\AnimatedGifNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\TweetWithheld::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\TweetWithheldNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\UserWithheld::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\UserWithheldNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\CompactPlace::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\CompactPlaceNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DefaultPlace::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\DefaultPlaceNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DetailedPlace::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\DetailedPlaceNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\GenericProblem::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\GenericProblemNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\InvalidRequestProblem::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\InvalidRequestProblemNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\InvalidRequestProblemErrorsItem::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\InvalidRequestProblemErrorsItemNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ResourceNotFoundProblem::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\ResourceNotFoundProblemNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ResourceUnauthorizedProblem::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\ResourceUnauthorizedProblemNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ClientForbiddenProblem::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\ClientForbiddenProblemNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\DisallowedResourceProblem::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\DisallowedResourceProblemNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\UnsupportedAuthenticationProblem::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\UnsupportedAuthenticationProblemNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\UsageCapExceededProblem::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\UsageCapExceededProblemNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ConnectionExceptionProblem::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\ConnectionExceptionProblemNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\ClientDisconnectedProblem::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\ClientDisconnectedProblemNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\OperationalDisconnectProblem::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\OperationalDisconnectProblemNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\RulesCapProblem::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\RulesCapProblemNormalizer::class,
        
        \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\InvalidRuleProblem::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer\InvalidRuleProblemNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer\ReferenceNormalizer::class,
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
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}