<?php
namespace LemonWay\Lib;
/**
 * API Config settings
 */
class Config
{
    /**
     * DirectKit URL
     * @var string
     */
    public $dkUrl;

    /**
     * WebKit URL
     * @var string
     */
    public $wkUrl;

    /**
     * Login
     * @var string
     */
    public $wlLogin;

    /**
     * Password
     * @var string
     */
    public $wlPass;

    /**
     * Lang
     * @var string
     */
    public $lang;

    /**
     * isDebugEnabled
     * @var boolean
     */
    public $isDebugEnabled = false;
}