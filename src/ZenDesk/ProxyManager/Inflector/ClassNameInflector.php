<?php

namespace ZenDesk\ProxyManager\Inflector;

use ProxyManager\Inflector\ClassNameInflectorInterface;

class ClassNameInflector implements ClassNameInflectorInterface
{
    /**
     * @var string
     */
    protected $proxyNamespace;

    /**
     * @var int
     */
    private $proxyMarkerLength;

    /**
     * @var string
     */
    private $proxyMarker;

    /**
     * @param string $proxyNamespace
     */
    public function __construct($proxyNamespace)
    {
        $this->proxyNamespace    = (string) $proxyNamespace;
        $this->proxyMarker       = '\\' . static::PROXY_MARKER . '\\';
        $this->proxyMarkerLength = strlen($this->proxyMarker);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserClassName($className)
    {
        $className = ltrim($className, '\\');

        if (false === $position = strrpos($className, $this->proxyMarker)) {
            return $className;
        }

        return substr(
            $className,
            $this->proxyMarkerLength + $position,
            strrpos($className, '\\') - ($position + $this->proxyMarkerLength)
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyClassName($className, array $options = array())
    {
        return $this->proxyNamespace
        . $this->proxyMarker
        . $this->getUserClassName($className);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyClassName($className)
    {
        return false !== strrpos($className, $this->proxyMarker);
    }
}
