<?php

namespace Jane\Component\OpenApi31\JsonSchema\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\JsonSchema\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\JsonSchema\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OpenApiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\JsonSchema\Model\OpenApi::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\OpenApi31\JsonSchema\Model\OpenApi;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi31\JsonSchema\Model\OpenApi();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('openapi', $data) && $data['openapi'] !== null) {
            $object->setOpenapi($data['openapi']);
        } elseif (\array_key_exists('openapi', $data) && $data['openapi'] === null) {
            $object->setOpenapi(null);
        }
        if (\array_key_exists('info', $data) && $data['info'] !== null) {
            $object->setInfo($this->denormalizer->denormalize($data['info'], \Jane\Component\OpenApi31\JsonSchema\Model\Info::class, 'json', $context));
        } elseif (\array_key_exists('info', $data) && $data['info'] === null) {
            $object->setInfo(null);
        }
        if (\array_key_exists('jsonSchemaDialect', $data) && $data['jsonSchemaDialect'] !== null) {
            $object->setJsonSchemaDialect($data['jsonSchemaDialect']);
        } elseif (\array_key_exists('jsonSchemaDialect', $data) && $data['jsonSchemaDialect'] === null) {
            $object->setJsonSchemaDialect(null);
        }
        if (\array_key_exists('servers', $data) && $data['servers'] !== null) {
            $values = [];
            foreach ($data['servers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi31\JsonSchema\Model\Server::class, 'json', $context);
            }
            $object->setServers($values);
        } elseif (\array_key_exists('servers', $data) && $data['servers'] === null) {
            $object->setServers(null);
        }
        if (\array_key_exists('paths', $data) && $data['paths'] !== null) {
            $values_1 = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
            foreach ($data['paths'] as $key => $value_1) {
                if (preg_match('/^\//', (string) $key) && \is_array($value_1)) {
                    $values_1[$key] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi31\JsonSchema\Model\PathItem::class, 'json', $context);
                    continue;
                }
            }
            $object->setPaths($values_1);
        } elseif (\array_key_exists('paths', $data) && $data['paths'] === null) {
            $object->setPaths(null);
        }
        if (\array_key_exists('webhooks', $data) && $data['webhooks'] !== null) {
            $values_2 = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
            foreach ($data['webhooks'] as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $object->setWebhooks($values_2);
        } elseif (\array_key_exists('webhooks', $data) && $data['webhooks'] === null) {
            $object->setWebhooks(null);
        }
        if (\array_key_exists('components', $data) && $data['components'] !== null) {
            $object->setComponents($this->denormalizer->denormalize($data['components'], \Jane\Component\OpenApi31\JsonSchema\Model\Components::class, 'json', $context));
        } elseif (\array_key_exists('components', $data) && $data['components'] === null) {
            $object->setComponents(null);
        }
        if (\array_key_exists('security', $data) && $data['security'] !== null) {
            $values_3 = [];
            foreach ($data['security'] as $value_3) {
                $values_4 = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
                foreach ($value_3 as $key_2 => $value_4) {
                    $values_5 = [];
                    foreach ($value_4 as $value_5) {
                        $values_5[] = $value_5;
                    }
                    $values_4[$key_2] = $values_5;
                }
                $values_3[] = $values_4;
            }
            $object->setSecurity($values_3);
        } elseif (\array_key_exists('security', $data) && $data['security'] === null) {
            $object->setSecurity(null);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_6 = [];
            foreach ($data['tags'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Jane\Component\OpenApi31\JsonSchema\Model\Tag::class, 'json', $context);
            }
            $object->setTags($values_6);
        } elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
        }
        if (\array_key_exists('externalDocs', $data) && $data['externalDocs'] !== null) {
            $object->setExternalDocs($this->denormalizer->denormalize($data['externalDocs'], \Jane\Component\OpenApi31\JsonSchema\Model\ExternalDocumentation::class, 'json', $context));
        } elseif (\array_key_exists('externalDocs', $data) && $data['externalDocs'] === null) {
            $object->setExternalDocs(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['openapi'] = $data->getOpenapi();
        $dataArray['info'] = $this->normalizer->normalize($data->getInfo(), 'json', $context);
        if ($data->isInitialized('jsonSchemaDialect') && null !== $data->getJsonSchemaDialect()) {
            $dataArray['jsonSchemaDialect'] = $data->getJsonSchemaDialect();
        }
        if ($data->isInitialized('servers') && null !== $data->getServers()) {
            $values = [];
            foreach ($data->getServers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['servers'] = $values;
        }
        if ($data->isInitialized('paths') && null !== $data->getPaths()) {
            $values_1 = [];
            foreach ($data->getPaths() as $key => $value_1) {
                if (preg_match('/^\//', (string) $key) && \is_object($value_1)) {
                    $values_1[$key] = $this->normalizer->normalize($value_1, 'json', $context);
                    continue;
                }
            }
            $dataArray['paths'] = $values_1;
        }
        if ($data->isInitialized('webhooks') && null !== $data->getWebhooks()) {
            $values_2 = [];
            foreach ($data->getWebhooks() as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $dataArray['webhooks'] = $values_2;
        }
        if ($data->isInitialized('components') && null !== $data->getComponents()) {
            $dataArray['components'] = $this->normalizer->normalize($data->getComponents(), 'json', $context);
        }
        if ($data->isInitialized('security') && null !== $data->getSecurity()) {
            $values_3 = [];
            foreach ($data->getSecurity() as $value_3) {
                $values_4 = [];
                foreach ($value_3 as $key_2 => $value_4) {
                    $values_5 = [];
                    foreach ($value_4 as $value_5) {
                        $values_5[] = $value_5;
                    }
                    $values_4[$key_2] = $values_5;
                }
                $values_3[] = $values_4;
            }
            $dataArray['security'] = $values_3;
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_6 = [];
            foreach ($data->getTags() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['tags'] = $values_6;
        }
        if ($data->isInitialized('externalDocs') && null !== $data->getExternalDocs()) {
            $dataArray['externalDocs'] = $this->normalizer->normalize($data->getExternalDocs(), 'json', $context);
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\JsonSchema\Model\OpenApi::class => false];
    }
}
