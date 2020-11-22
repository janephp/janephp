<?php

namespace PicturePark\API\Model;

class DocumentHistoryDifference
{
    /**
     * 
     *
     * @var string|null
     */
    protected $documentId;
    /**
     * 
     *
     * @var int
     */
    protected $oldDocumentVersion;
    /**
     * 
     *
     * @var int
     */
    protected $newDocumentVersion;
    /**
    * Contains an RFC 6902 compatible patch that can be applied on the old document to get the new document.
    Use a library like jsondiffpatch.net (https://github.com/wbish/jsondiffpatch.net)
    or jsondiffpatch (https://github.com/benjamine/jsondiffpatch) to process this.
    *
    * @var mixed|null
    */
    protected $patch;
    /**
     * 
     *
     * @return string|null
     */
    public function getDocumentId() : ?string
    {
        return $this->documentId;
    }
    /**
     * 
     *
     * @param string|null $documentId
     *
     * @return self
     */
    public function setDocumentId(?string $documentId) : self
    {
        $this->documentId = $documentId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOldDocumentVersion() : int
    {
        return $this->oldDocumentVersion;
    }
    /**
     * 
     *
     * @param int $oldDocumentVersion
     *
     * @return self
     */
    public function setOldDocumentVersion(int $oldDocumentVersion) : self
    {
        $this->oldDocumentVersion = $oldDocumentVersion;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNewDocumentVersion() : int
    {
        return $this->newDocumentVersion;
    }
    /**
     * 
     *
     * @param int $newDocumentVersion
     *
     * @return self
     */
    public function setNewDocumentVersion(int $newDocumentVersion) : self
    {
        $this->newDocumentVersion = $newDocumentVersion;
        return $this;
    }
    /**
    * Contains an RFC 6902 compatible patch that can be applied on the old document to get the new document.
    Use a library like jsondiffpatch.net (https://github.com/wbish/jsondiffpatch.net)
    or jsondiffpatch (https://github.com/benjamine/jsondiffpatch) to process this.
    *
    * @return mixed
    */
    public function getPatch()
    {
        return $this->patch;
    }
    /**
    * Contains an RFC 6902 compatible patch that can be applied on the old document to get the new document.
    Use a library like jsondiffpatch.net (https://github.com/wbish/jsondiffpatch.net)
    or jsondiffpatch (https://github.com/benjamine/jsondiffpatch) to process this.
    *
    * @param mixed $patch
    *
    * @return self
    */
    public function setPatch($patch) : self
    {
        $this->patch = $patch;
        return $this;
    }
}