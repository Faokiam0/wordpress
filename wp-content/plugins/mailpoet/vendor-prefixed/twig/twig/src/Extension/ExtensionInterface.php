<?php
 namespace MailPoetVendor\Twig\Extension; if (!defined('ABSPATH')) exit; use MailPoetVendor\Twig\Environment; use MailPoetVendor\Twig\NodeVisitor\NodeVisitorInterface; use MailPoetVendor\Twig\TokenParser\TokenParserInterface; use MailPoetVendor\Twig\TwigFilter; use MailPoetVendor\Twig\TwigFunction; use MailPoetVendor\Twig\TwigTest; interface ExtensionInterface { public function initRuntime(\MailPoetVendor\Twig\Environment $environment); public function getTokenParsers(); public function getNodeVisitors(); public function getFilters(); public function getTests(); public function getFunctions(); public function getOperators(); public function getGlobals(); public function getName(); } \class_alias('MailPoetVendor\\Twig\\Extension\\ExtensionInterface', 'MailPoetVendor\\Twig_ExtensionInterface'); \class_exists('MailPoetVendor\\Twig\\Environment'); 