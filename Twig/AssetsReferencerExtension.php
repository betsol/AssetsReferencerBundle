<?php

namespace Betsol\Bundle\AssetsReferencerBundle\Twig;

/**
 * Extends Twig functionality.
 *
 * @author Slava Fomin II <s.fomin@betsol.ru>
 */
class AssetsReferencerExtension extends \Twig_Extension
{
    /** @var  string */
    protected $baseUrl;


    /**
     * @param string $baseUrl
     */
    public function __construct($baseUrl)
    {
        $this->baseUrl = rtrim($baseUrl, '/');
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'betsol.assets_referencer';
    }

    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('asset_reference', [$this, 'assetReferenceFunction']),
        ];
    }

    /**
     * @param string $assetPath
     * @return string
     */
    public function assetReferenceFunction($assetPath)
    {
        $assetPath = ltrim($assetPath, '/');

        $assetPath = implode('/', [$this->baseUrl, $assetPath]);

        return $assetPath;
    }
}