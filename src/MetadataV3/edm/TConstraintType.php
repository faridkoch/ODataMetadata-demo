<?php

namespace AlgoWeb\ODataMetadata\MetadataV3\edm;

use AlgoWeb\ODataMetadata\IsOK;
use AlgoWeb\ODataMetadata\IsOKTraits\IsOKToolboxTrait;

/**
 * Class representing TConstraintType
 *
 * XSD Type: TConstraint
 */
class TConstraintType extends IsOK
{
    use IsOKToolboxTrait;
    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV3\edm\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV3\edm\TReferentialConstraintRoleElementType $principal
     */
    private $principal = null;

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV3\edm\TReferentialConstraintRoleElementType $dependent
     */
    private $dependent = null;

    /**
     * Gets as documentation
     *
     * @return \AlgoWeb\ODataMetadata\MetadataV3\edm\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV3\edm\TDocumentationType $documentation
     * @return self
     */
    public function setDocumentation(TDocumentationType $documentation)
    {
        $msg = null;
        if (!$documentation->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Gets as principal
     *
     * @return \AlgoWeb\ODataMetadata\MetadataV3\edm\TReferentialConstraintRoleElementType
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Sets a new principal
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV3\edm\TReferentialConstraintRoleElementType $principal
     * @return self
     */
    public function setPrincipal(TReferentialConstraintRoleElementType $principal)
    {
        $msg = null;
        if (!$principal->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->principal = $principal;
        return $this;
    }

    /**
     * Gets as dependent
     *
     * @return \AlgoWeb\ODataMetadata\MetadataV3\edm\TReferentialConstraintRoleElementType
     */
    public function getDependent()
    {
        return $this->dependent;
    }

    /**
     * Sets a new dependent
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV3\edm\TReferentialConstraintRoleElementType $dependent
     * @return self
     */
    public function setDependent(TReferentialConstraintRoleElementType $dependent)
    {
        $msg = null;
        if (!$dependent->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->dependent = $dependent;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isObjectNullOrOK($this->documentation, $msg)) {
            return false;
        }
        if (null == $this->principal || !$this->isObjectNullOrOK($this->principal, $msg)) {
            $msg = (null != $msg) ? $msg : "Principal cannot be null";
            return false;
        }
        if (null == $this->dependent || !$this->isObjectNullOrOK($this->dependent, $msg)) {
            $msg = (null != $msg) ? $msg : "Dependent cannot be null";
            return false;
        }

        return true;
    }
}
