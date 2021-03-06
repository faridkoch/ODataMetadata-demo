<?php

namespace AlgoWeb\ODataMetadata\MetadataV3\mapping\cs;

use AlgoWeb\ODataMetadata\IsOK;

/**
 * Class representing TQueryViewType
 *
 * Type for QueryView element
 *
 * XSD Type: TQueryView
 */
class TQueryViewType extends IsOK
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property string $typeName
     */
    private $typeName = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param  string ...$value
     * @return string
     */
    public function value(...$value)
    {
        if (0 < count($value)) {
            $this->__value = $value[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as typeName
     *
     * @return string
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Sets a new typeName
     *
     * @param  string $typeName
     * @return self
     */
    public function setTypeName($typeName)
    {
        if (null == $this->__value && null == $this->typeName) {
            $msg = "Cannot have both value and type null";
            throw new \InvalidArgumentException($msg);
        }
        $this->typeName = $typeName;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (null == $this->__value && null == $this->typeName) {
            $msg = "Cannot have both value and type null";
            return false;
        }
        return true;
    }
}
