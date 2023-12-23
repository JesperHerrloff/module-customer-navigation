<?php

namespace JesperHerrloff\CustomerNavigation\Plugin;

use Magento\Customer\Block\Account\Navigation;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Html\Link\Current;

class AccountNavigation
{
    private ScopeConfigInterface $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * After Get Links in Customer Navigation
     *
     * @param Navigation $subject
     * @param $result
     * @return array
     */
    public function afterGetLinks(Navigation $subject, $result):array
    {
        if (!$this->scopeConfig->isSetFlag('jesperherrloff_customer_navigation/settings/account_navigation')) {
            return $result;
        }
        /**
         * @var string $key
         * @var Current $link
         */
        foreach ($result as $key => $link) {
            $link->setTemplate('JesperHerrloff_CustomerNavigation::account/link.phtml');
            if ($this->scopeConfig->isSetFlag('jesperherrloff_customer_navigation/settings/name_as_class')) {
                $link->setAttributes(['class' => $link->getNameInLayout()]);
            }
            $result[$key] = $link;
        }
        return $result;
    }
}
