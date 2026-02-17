<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent();
        if (\array_key_exists('includeExtendedDataFields', $data) && \is_int($data['includeExtendedDataFields'])) {
            $data['includeExtendedDataFields'] = (bool) $data['includeExtendedDataFields'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('maxResults', $data)) {
            $object->setMaxResults($data['maxResults']);
            unset($data['maxResults']);
        }
        if (\array_key_exists('nextToken', $data)) {
            $object->setNextToken($data['nextToken']);
            unset($data['nextToken']);
        }
        if (\array_key_exists('includeExtendedDataFields', $data)) {
            $object->setIncludeExtendedDataFields($data['includeExtendedDataFields']);
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
        if ($data->isInitialized('maxResults') && null !== $data->getMaxResults()) {
            $dataArray['maxResults'] = $data->getMaxResults();
        }
        if ($data->isInitialized('nextToken') && null !== $data->getNextToken()) {
            $dataArray['nextToken'] = $data->getNextToken();
        }
        if ($data->isInitialized('includeExtendedDataFields') && null !== $data->getIncludeExtendedDataFields()) {
            $dataArray['includeExtendedDataFields'] = $data->getIncludeExtendedDataFields();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent::class => true];
    }
    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}