create database Client;

use Client;

CREATE TABLE clientInfo (
  topic varchar(100) NOT NULL,
  NumberOfWords bigint NOT NULL,
  Instructions varchar(100) NOT NULL,
  ScheduledDeliveryDate Date NOT NULL,
  PRIMARY KEY  (topic)
);