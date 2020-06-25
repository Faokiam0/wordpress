<?php
 namespace MailPoetVendor\Doctrine\DBAL\Portability; if (!defined('ABSPATH')) exit; use PDO; class Statement implements \IteratorAggregate, \MailPoetVendor\Doctrine\DBAL\Driver\Statement { private $portability; private $stmt; private $case; private $defaultFetchMode = \PDO::FETCH_BOTH; public function __construct($stmt, \MailPoetVendor\Doctrine\DBAL\Portability\Connection $conn) { $this->stmt = $stmt; $this->portability = $conn->getPortability(); $this->case = $conn->getFetchCase(); } public function bindParam($column, &$variable, $type = null, $length = null) { return $this->stmt->bindParam($column, $variable, $type, $length); } public function bindValue($param, $value, $type = null) { return $this->stmt->bindValue($param, $value, $type); } public function closeCursor() { return $this->stmt->closeCursor(); } public function columnCount() { return $this->stmt->columnCount(); } public function errorCode() { return $this->stmt->errorCode(); } public function errorInfo() { return $this->stmt->errorInfo(); } public function execute($params = null) { return $this->stmt->execute($params); } public function setFetchMode($fetchMode, $arg1 = null, $arg2 = null) { $this->defaultFetchMode = $fetchMode; return $this->stmt->setFetchMode($fetchMode, $arg1, $arg2); } public function getIterator() { $data = $this->fetchAll(); return new \ArrayIterator($data); } public function fetch($fetchMode = null) { $fetchMode = $fetchMode ?: $this->defaultFetchMode; $row = $this->stmt->fetch($fetchMode); $row = $this->fixRow($row, $this->portability & (\MailPoetVendor\Doctrine\DBAL\Portability\Connection::PORTABILITY_EMPTY_TO_NULL | \MailPoetVendor\Doctrine\DBAL\Portability\Connection::PORTABILITY_RTRIM), !\is_null($this->case) && ($fetchMode == \PDO::FETCH_ASSOC || $fetchMode == \PDO::FETCH_BOTH) && $this->portability & \MailPoetVendor\Doctrine\DBAL\Portability\Connection::PORTABILITY_FIX_CASE); return $row; } public function fetchAll($fetchMode = null, $columnIndex = 0) { $fetchMode = $fetchMode ?: $this->defaultFetchMode; if ($columnIndex != 0) { $rows = $this->stmt->fetchAll($fetchMode, $columnIndex); } else { $rows = $this->stmt->fetchAll($fetchMode); } $iterateRow = $this->portability & (\MailPoetVendor\Doctrine\DBAL\Portability\Connection::PORTABILITY_EMPTY_TO_NULL | \MailPoetVendor\Doctrine\DBAL\Portability\Connection::PORTABILITY_RTRIM); $fixCase = !\is_null($this->case) && ($fetchMode == \PDO::FETCH_ASSOC || $fetchMode == \PDO::FETCH_BOTH) && $this->portability & \MailPoetVendor\Doctrine\DBAL\Portability\Connection::PORTABILITY_FIX_CASE; if (!$iterateRow && !$fixCase) { return $rows; } if ($fetchMode === \PDO::FETCH_COLUMN) { foreach ($rows as $num => $row) { $rows[$num] = array($row); } } foreach ($rows as $num => $row) { $rows[$num] = $this->fixRow($row, $iterateRow, $fixCase); } if ($fetchMode === \PDO::FETCH_COLUMN) { foreach ($rows as $num => $row) { $rows[$num] = $row[0]; } } return $rows; } protected function fixRow($row, $iterateRow, $fixCase) { if (!$row) { return $row; } if ($fixCase) { $row = \array_change_key_case($row, $this->case); } if ($iterateRow) { foreach ($row as $k => $v) { if ($this->portability & \MailPoetVendor\Doctrine\DBAL\Portability\Connection::PORTABILITY_EMPTY_TO_NULL && $v === '') { $row[$k] = null; } elseif ($this->portability & \MailPoetVendor\Doctrine\DBAL\Portability\Connection::PORTABILITY_RTRIM && \is_string($v)) { $row[$k] = \rtrim($v); } } } return $row; } public function fetchColumn($columnIndex = 0) { $value = $this->stmt->fetchColumn($columnIndex); if ($this->portability & (\MailPoetVendor\Doctrine\DBAL\Portability\Connection::PORTABILITY_EMPTY_TO_NULL | \MailPoetVendor\Doctrine\DBAL\Portability\Connection::PORTABILITY_RTRIM)) { if ($this->portability & \MailPoetVendor\Doctrine\DBAL\Portability\Connection::PORTABILITY_EMPTY_TO_NULL && $value === '') { $value = null; } elseif ($this->portability & \MailPoetVendor\Doctrine\DBAL\Portability\Connection::PORTABILITY_RTRIM && \is_string($value)) { $value = \rtrim($value); } } return $value; } public function rowCount() { return $this->stmt->rowCount(); } } 