<?php
 namespace MailPoetVendor\Twig\Sandbox; if (!defined('ABSPATH')) exit; class SecurityNotAllowedFunctionError extends \MailPoetVendor\Twig\Sandbox\SecurityError { private $functionName; public function __construct($message, $functionName, $lineno = -1, $filename = null, \Exception $previous = null) { parent::__construct($message, $lineno, $filename, $previous); $this->functionName = $functionName; } public function getFunctionName() { return $this->functionName; } } \class_alias('MailPoetVendor\\Twig\\Sandbox\\SecurityNotAllowedFunctionError', 'MailPoetVendor\\Twig_Sandbox_SecurityNotAllowedFunctionError'); 