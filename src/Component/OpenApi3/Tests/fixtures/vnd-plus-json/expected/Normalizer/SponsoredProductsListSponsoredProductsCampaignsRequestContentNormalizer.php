<?php

namespace Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
class SponsoredProductsListSponsoredProductsCampaignsRequestContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('includeExtendedDataFields', $data) && \is_int($data['includeExtendedDataFields'])) {
            $data['includeExtendedDataFields'] = (bool) $data['includeExtendedDataFields'];
        }
        if (\array_key_exists('maxResults', $data)) {
            $object->maxResults = $data['maxResults'];
            unset($data['maxResults']);
        }
        if (\array_key_exists('nextToken', $data)) {
            $object->nextToken = $data['nextToken'];
            unset($data['nextToken']);
        }
        if (\array_key_exists('includeExtendedDataFields', $data)) {
            $object->includeExtendedDataFields = $data['includeExtendedDataFields'];
            unset($data['includeExtendedDataFields']);
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
        if (array_key_exists('maxResults', get_object_vars($data)) && null !== ($data->maxResults ?? null)) {
            $dataArray['maxResults'] = $data->maxResults ?? null;
        }
        if (array_key_exists('nextToken', get_object_vars($data)) && null !== ($data->nextToken ?? null)) {
            $dataArray['nextToken'] = $data->nextToken ?? null;
        }
        if (array_key_exists('includeExtendedDataFields', get_object_vars($data)) && null !== ($data->includeExtendedDataFields ?? null)) {
            $dataArray['includeExtendedDataFields'] = $data->includeExtendedDataFields ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\VndPlusJson\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent::class => true];
    }
    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}