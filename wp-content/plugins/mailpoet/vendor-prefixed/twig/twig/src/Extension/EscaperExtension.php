<?php
 namespace MailPoetVendor\Twig\Extension; if (!defined('ABSPATH')) exit; use MailPoetVendor\Twig\NodeVisitor\EscaperNodeVisitor; use MailPoetVendor\Twig\TokenParser\AutoEscapeTokenParser; use MailPoetVendor\Twig\TwigFilter; class EscaperExtension extends \MailPoetVendor\Twig\Extension\AbstractExtension { protected $defaultStrategy; public function __construct($defaultStrategy = 'html') { $this->setDefaultStrategy($defaultStrategy); } public function getTokenParsers() { return [new \MailPoetVendor\Twig\TokenParser\AutoEscapeTokenParser()]; } public function getNodeVisitors() { return [new \MailPoetVendor\Twig\NodeVisitor\EscaperNodeVisitor()]; } public function getFilters() { return [new \MailPoetVendor\Twig\TwigFilter('raw', 'twig_raw_filter', ['is_safe' => ['all']])]; } public function setDefaultStrategy($defaultStrategy) { if (\true === $defaultStrategy) { @\trigger_error('Using "true" as the default strategy is deprecated since version 1.21. Use "html" instead.', \E_USER_DEPRECATED); $defaultStrategy = 'html'; } if ('filename' === $defaultStrategy) { @\trigger_error('Using "filename" as the default strategy is deprecated since version 1.27. Use "name" instead.', \E_USER_DEPRECATED); $defaultStrategy = 'name'; } if ('name' === $defaultStrategy) { $defaultStrategy = ['MailPoetVendor\\Twig\\FileExtensionEscapingStrategy', 'guess']; } $this->defaultStrategy = $defaultStrategy; } public function getDefaultStrategy($name) { if (!\is_string($this->defaultStrategy) && \false !== $this->defaultStrategy) { return \call_user_func($this->defaultStrategy, $name); } return $this->defaultStrategy; } public function getName() { return 'escaper'; } } \class_alias('MailPoetVendor\\Twig\\Extension\\EscaperExtension', 'MailPoetVendor\\Twig_Extension_Escaper'); namespace MailPoetVendor; function twig_raw_filter($string) { return $string; } 