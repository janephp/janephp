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
class UserDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\UserDetail';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\UserDetail';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\UserDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('firstName', $data) && $data['firstName'] !== null) {
            $object->setFirstName($data['firstName']);
        }
        elseif (\array_key_exists('firstName', $data) && $data['firstName'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('lastName', $data) && $data['lastName'] !== null) {
            $object->setLastName($data['lastName']);
        }
        elseif (\array_key_exists('lastName', $data) && $data['lastName'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('emailAddress', $data)) {
            $object->setEmailAddress($data['emailAddress']);
        }
        if (\array_key_exists('isDeleted', $data)) {
            $object->setIsDeleted($data['isDeleted']);
        }
        if (\array_key_exists('userRoles', $data) && $data['userRoles'] !== null) {
            $values = array();
            foreach ($data['userRoles'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\UserRoleAssignment', 'json', $context);
            }
            $object->setUserRoles($values);
        }
        elseif (\array_key_exists('userRoles', $data) && $data['userRoles'] === null) {
            $object->setUserRoles(null);
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($data['comment']);
        }
        elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('languageCode', $data) && $data['languageCode'] !== null) {
            $object->setLanguageCode($data['languageCode']);
        }
        elseif (\array_key_exists('languageCode', $data) && $data['languageCode'] === null) {
            $object->setLanguageCode(null);
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $object->setAddress($data['address']);
        }
        elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
        }
        if (\array_key_exists('identityProviderId', $data) && $data['identityProviderId'] !== null) {
            $object->setIdentityProviderId($data['identityProviderId']);
        }
        elseif (\array_key_exists('identityProviderId', $data) && $data['identityProviderId'] === null) {
            $object->setIdentityProviderId(null);
        }
        if (\array_key_exists('ownerTokens', $data) && $data['ownerTokens'] !== null) {
            $values_1 = array();
            foreach ($data['ownerTokens'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\OwnerToken', 'json', $context);
            }
            $object->setOwnerTokens($values_1);
        }
        elseif (\array_key_exists('ownerTokens', $data) && $data['ownerTokens'] === null) {
            $object->setOwnerTokens(null);
        }
        if (\array_key_exists('authorizationState', $data)) {
            $object->setAuthorizationState($data['authorizationState']);
        }
        if (\array_key_exists('isLocked', $data)) {
            $object->setIsLocked($data['isLocked']);
        }
        if (\array_key_exists('lifeCycle', $data)) {
            $object->setLifeCycle($data['lifeCycle']);
        }
        if (\array_key_exists('isSupportUser', $data)) {
            $object->setIsSupportUser($data['isSupportUser']);
        }
        if (\array_key_exists('isReadOnly', $data)) {
            $object->setIsReadOnly($data['isReadOnly']);
        }
        if (\array_key_exists('isFederated', $data)) {
            $object->setIsFederated($data['isFederated']);
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $object->setAudit($data['audit']);
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->setAudit(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getFirstName()) {
            $data['firstName'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['lastName'] = $object->getLastName();
        }
        $data['emailAddress'] = $object->getEmailAddress();
        $data['isDeleted'] = $object->getIsDeleted();
        if (null !== $object->getUserRoles()) {
            $values = array();
            foreach ($object->getUserRoles() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['userRoles'] = $values;
        }
        if (null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        }
        if (null !== $object->getLanguageCode()) {
            $data['languageCode'] = $object->getLanguageCode();
        }
        if (null !== $object->getAddress()) {
            $data['address'] = $object->getAddress();
        }
        if (null !== $object->getIdentityProviderId()) {
            $data['identityProviderId'] = $object->getIdentityProviderId();
        }
        if (null !== $object->getOwnerTokens()) {
            $values_1 = array();
            foreach ($object->getOwnerTokens() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['ownerTokens'] = $values_1;
        }
        if (null !== $object->getAuthorizationState()) {
            $data['authorizationState'] = $object->getAuthorizationState();
        }
        if (null !== $object->getIsLocked()) {
            $data['isLocked'] = $object->getIsLocked();
        }
        if (null !== $object->getLifeCycle()) {
            $data['lifeCycle'] = $object->getLifeCycle();
        }
        if (null !== $object->getIsSupportUser()) {
            $data['isSupportUser'] = $object->getIsSupportUser();
        }
        if (null !== $object->getIsReadOnly()) {
            $data['isReadOnly'] = $object->getIsReadOnly();
        }
        if (null !== $object->getIsFederated()) {
            $data['isFederated'] = $object->getIsFederated();
        }
        if (null !== $object->getAudit()) {
            $data['audit'] = $object->getAudit();
        }
        return $data;
    }
}