<?php
 namespace MailPoetVendor\Symfony\Component\Translation; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\Config\Resource\ResourceInterface; use MailPoetVendor\Symfony\Component\Translation\Exception\LogicException; class MessageCatalogue implements \MailPoetVendor\Symfony\Component\Translation\MessageCatalogueInterface, \MailPoetVendor\Symfony\Component\Translation\MetadataAwareInterface { private $messages = []; private $metadata = []; private $resources = []; private $locale; private $fallbackCatalogue; private $parent; public function __construct($locale, array $messages = []) { $this->locale = $locale; $this->messages = $messages; } public function getLocale() { return $this->locale; } public function getDomains() { return \array_keys($this->messages); } public function all($domain = null) { if (null === $domain) { return $this->messages; } return isset($this->messages[$domain]) ? $this->messages[$domain] : []; } public function set($id, $translation, $domain = 'messages') { $this->add([$id => $translation], $domain); } public function has($id, $domain = 'messages') { if (isset($this->messages[$domain][$id])) { return \true; } if (null !== $this->fallbackCatalogue) { return $this->fallbackCatalogue->has($id, $domain); } return \false; } public function defines($id, $domain = 'messages') { return isset($this->messages[$domain][$id]); } public function get($id, $domain = 'messages') { if (isset($this->messages[$domain][$id])) { return $this->messages[$domain][$id]; } if (null !== $this->fallbackCatalogue) { return $this->fallbackCatalogue->get($id, $domain); } return $id; } public function replace($messages, $domain = 'messages') { $this->messages[$domain] = []; $this->add($messages, $domain); } public function add($messages, $domain = 'messages') { if (!isset($this->messages[$domain])) { $this->messages[$domain] = $messages; } else { foreach ($messages as $id => $message) { $this->messages[$domain][$id] = $message; } } } public function addCatalogue(\MailPoetVendor\Symfony\Component\Translation\MessageCatalogueInterface $catalogue) { if ($catalogue->getLocale() !== $this->locale) { throw new \MailPoetVendor\Symfony\Component\Translation\Exception\LogicException(\sprintf('Cannot add a catalogue for locale "%s" as the current locale for this catalogue is "%s"', $catalogue->getLocale(), $this->locale)); } foreach ($catalogue->all() as $domain => $messages) { $this->add($messages, $domain); } foreach ($catalogue->getResources() as $resource) { $this->addResource($resource); } if ($catalogue instanceof \MailPoetVendor\Symfony\Component\Translation\MetadataAwareInterface) { $metadata = $catalogue->getMetadata('', ''); $this->addMetadata($metadata); } } public function addFallbackCatalogue(\MailPoetVendor\Symfony\Component\Translation\MessageCatalogueInterface $catalogue) { $c = $catalogue; while ($c = $c->getFallbackCatalogue()) { if ($c->getLocale() === $this->getLocale()) { throw new \MailPoetVendor\Symfony\Component\Translation\Exception\LogicException(\sprintf('Circular reference detected when adding a fallback catalogue for locale "%s".', $catalogue->getLocale())); } } $c = $this; do { if ($c->getLocale() === $catalogue->getLocale()) { throw new \MailPoetVendor\Symfony\Component\Translation\Exception\LogicException(\sprintf('Circular reference detected when adding a fallback catalogue for locale "%s".', $catalogue->getLocale())); } foreach ($catalogue->getResources() as $resource) { $c->addResource($resource); } } while ($c = $c->parent); $catalogue->parent = $this; $this->fallbackCatalogue = $catalogue; foreach ($catalogue->getResources() as $resource) { $this->addResource($resource); } } public function getFallbackCatalogue() { return $this->fallbackCatalogue; } public function getResources() { return \array_values($this->resources); } public function addResource(\MailPoetVendor\Symfony\Component\Config\Resource\ResourceInterface $resource) { $this->resources[$resource->__toString()] = $resource; } public function getMetadata($key = '', $domain = 'messages') { if ('' == $domain) { return $this->metadata; } if (isset($this->metadata[$domain])) { if ('' == $key) { return $this->metadata[$domain]; } if (isset($this->metadata[$domain][$key])) { return $this->metadata[$domain][$key]; } } return null; } public function setMetadata($key, $value, $domain = 'messages') { $this->metadata[$domain][$key] = $value; } public function deleteMetadata($key = '', $domain = 'messages') { if ('' == $domain) { $this->metadata = []; } elseif ('' == $key) { unset($this->metadata[$domain]); } else { unset($this->metadata[$domain][$key]); } } private function addMetadata(array $values) { foreach ($values as $domain => $keys) { foreach ($keys as $key => $value) { $this->setMetadata($key, $value, $domain); } } } } 