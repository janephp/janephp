<?php

namespace PicturePark\API\Model;

class Language
{
    /**
     * Language translations.
     *
     * @var mixed
     */
    protected $name;
    /**
     * IETF language tag. E.g en, en-US, de.
     *
     * @var string
     */
    protected $ietf;
    /**
     * Two letter ISO language code. E.g. en, de.
     *
     * @var string|null
     */
    protected $twoLetterISOLanguageName;
    /**
     * Three letter ISO language code. E.g. eng, deu.
     *
     * @var string|null
     */
    protected $threeLetterISOLanguageName;
    /**
     * Region code of the language. E.g. US, DE, CH.
     *
     * @var string|null
     */
    protected $regionCode;
    /**
     * Language translations.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Language translations.
     *
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * IETF language tag. E.g en, en-US, de.
     *
     * @return string
     */
    public function getIetf() : string
    {
        return $this->ietf;
    }
    /**
     * IETF language tag. E.g en, en-US, de.
     *
     * @param string $ietf
     *
     * @return self
     */
    public function setIetf(string $ietf) : self
    {
        $this->ietf = $ietf;
        return $this;
    }
    /**
     * Two letter ISO language code. E.g. en, de.
     *
     * @return string|null
     */
    public function getTwoLetterISOLanguageName() : ?string
    {
        return $this->twoLetterISOLanguageName;
    }
    /**
     * Two letter ISO language code. E.g. en, de.
     *
     * @param string|null $twoLetterISOLanguageName
     *
     * @return self
     */
    public function setTwoLetterISOLanguageName(?string $twoLetterISOLanguageName) : self
    {
        $this->twoLetterISOLanguageName = $twoLetterISOLanguageName;
        return $this;
    }
    /**
     * Three letter ISO language code. E.g. eng, deu.
     *
     * @return string|null
     */
    public function getThreeLetterISOLanguageName() : ?string
    {
        return $this->threeLetterISOLanguageName;
    }
    /**
     * Three letter ISO language code. E.g. eng, deu.
     *
     * @param string|null $threeLetterISOLanguageName
     *
     * @return self
     */
    public function setThreeLetterISOLanguageName(?string $threeLetterISOLanguageName) : self
    {
        $this->threeLetterISOLanguageName = $threeLetterISOLanguageName;
        return $this;
    }
    /**
     * Region code of the language. E.g. US, DE, CH.
     *
     * @return string|null
     */
    public function getRegionCode() : ?string
    {
        return $this->regionCode;
    }
    /**
     * Region code of the language. E.g. US, DE, CH.
     *
     * @param string|null $regionCode
     *
     * @return self
     */
    public function setRegionCode(?string $regionCode) : self
    {
        $this->regionCode = $regionCode;
        return $this;
    }
}