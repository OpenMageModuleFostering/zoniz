<?php

$installer = $this;

$installer->startSetup();

$installer->run("

DROP TABLE IF EXISTS zoniz_acc;
CREATE TABLE zoniz_acc (
  `id` tinyint(2) unsigned NOT NULL default 1,
  `account_name` varchar(512) NOT NULL default '',
  `stream_name` varchar(512) NOT NULL default '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");

$installer->endSetup(); 