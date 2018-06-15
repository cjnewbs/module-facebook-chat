<?php

namespace Newbury\FacebookChat\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\App\Config\ScopeConfigInterface;;
use Magento\Framework\Locale\Resolver;

class FacebookChat extends Template
{
    const CONFIG_PATH_PAGE_ID = 'newbury/facebookchat/page_id';

    /**
     * @var ScopeConfigInterface
     */
    protected $config;

    /**
     * @var Resolver
     */
    protected $localeResolver;

    /**
     * FacebookChat constructor.
     * @param Template\Context $context
     * @param ScopeConfigInterface $config
     * @param Resolver $resolver
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        ScopeConfigInterface $config,
        Resolver $resolver,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->config = $config;
        $this->localeResolver = $resolver;
    }

    /**
     * @return mixed
     */
    public function getPageId()
    {
        return $this->config->getValue(self::CONFIG_PATH_PAGE_ID);
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->localeResolver->getLocale();
    }
}