<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ShareOutputEmbedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\ShareOutputEmbed';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ShareOutputEmbed';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\ShareOutputEmbed();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contentId', $data)) {
            $object->setContentId($data['contentId']);
        }
        if (\array_key_exists('outputFormatId', $data)) {
            $object->setOutputFormatId($data['outputFormatId']);
        }
        if (\array_key_exists('viewUrl', $data) && $data['viewUrl'] !== null) {
            $object->setViewUrl($data['viewUrl']);
        }
        elseif (\array_key_exists('viewUrl', $data) && $data['viewUrl'] === null) {
            $object->setViewUrl(null);
        }
        if (\array_key_exists('downloadUrl', $data) && $data['downloadUrl'] !== null) {
            $object->setDownloadUrl($data['downloadUrl']);
        }
        elseif (\array_key_exists('downloadUrl', $data) && $data['downloadUrl'] === null) {
            $object->setDownloadUrl(null);
        }
        if (\array_key_exists('detail', $data) && $data['detail'] !== null) {
            $object->setDetail($data['detail']);
        }
        elseif (\array_key_exists('detail', $data) && $data['detail'] === null) {
            $object->setDetail(null);
        }
        if (\array_key_exists('dynamicRendering', $data)) {
            $object->setDynamicRendering($data['dynamicRendering']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('token', $data) && $data['token'] !== null) {
            $object->setToken($data['token']);
        }
        elseif (\array_key_exists('token', $data) && $data['token'] === null) {
            $object->setToken(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['contentId'] = $object->getContentId();
        $data['outputFormatId'] = $object->getOutputFormatId();
        if (null !== $object->getViewUrl()) {
            $data['viewUrl'] = $object->getViewUrl();
        }
        if (null !== $object->getDownloadUrl()) {
            $data['downloadUrl'] = $object->getDownloadUrl();
        }
        if (null !== $object->getDetail()) {
            $data['detail'] = $object->getDetail();
        }
        $data['dynamicRendering'] = $object->getDynamicRendering();
        $data['kind'] = $object->getKind();
        if (null !== $object->getToken()) {
            $data['token'] = $object->getToken();
        }
        return $data;
    }
}