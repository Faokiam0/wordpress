<?php
 namespace MailPoetVendor\Symfony\Component\Validator\Constraints; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\Validator\Constraint; use MailPoetVendor\Symfony\Component\Validator\ConstraintValidator; use MailPoetVendor\Symfony\Component\Validator\Exception\UnexpectedTypeException; class LuhnValidator extends \MailPoetVendor\Symfony\Component\Validator\ConstraintValidator { public function validate($value, \MailPoetVendor\Symfony\Component\Validator\Constraint $constraint) { if (!$constraint instanceof \MailPoetVendor\Symfony\Component\Validator\Constraints\Luhn) { throw new \MailPoetVendor\Symfony\Component\Validator\Exception\UnexpectedTypeException($constraint, \MailPoetVendor\Symfony\Component\Validator\Constraints\Luhn::class); } if (null === $value || '' === $value) { return; } if (!\is_string($value) && !(\is_object($value) && \method_exists($value, '__toString'))) { throw new \MailPoetVendor\Symfony\Component\Validator\Exception\UnexpectedTypeException($value, 'string'); } $value = (string) $value; if (!\ctype_digit($value)) { $this->context->buildViolation($constraint->message)->setParameter('{{ value }}', $this->formatValue($value))->setCode(\MailPoetVendor\Symfony\Component\Validator\Constraints\Luhn::INVALID_CHARACTERS_ERROR)->addViolation(); return; } $checkSum = 0; $length = \strlen($value); for ($i = $length - 1; $i >= 0; $i -= 2) { $checkSum += $value[$i]; } for ($i = $length - 2; $i >= 0; $i -= 2) { $checkSum += \array_sum(\str_split((int) $value[$i] * 2)); } if (0 === $checkSum || 0 !== $checkSum % 10) { $this->context->buildViolation($constraint->message)->setParameter('{{ value }}', $this->formatValue($value))->setCode(\MailPoetVendor\Symfony\Component\Validator\Constraints\Luhn::CHECKSUM_FAILED_ERROR)->addViolation(); } } } 