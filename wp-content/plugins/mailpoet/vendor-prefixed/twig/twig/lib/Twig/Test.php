<?php
 namespace MailPoetVendor; if (!defined('ABSPATH')) exit; @\trigger_error('The Twig_Test class is deprecated since version 1.12 and will be removed in 2.0. Use \\Twig\\TwigTest instead.', \E_USER_DEPRECATED); abstract class Twig_Test implements \MailPoetVendor\Twig_TestInterface, \MailPoetVendor\Twig_TestCallableInterface { protected $options; protected $arguments = []; public function __construct(array $options = []) { $this->options = \array_merge(['callable' => null], $options); } public function getCallable() { return $this->options['callable']; } } 