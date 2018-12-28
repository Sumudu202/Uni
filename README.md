# Uni

Schema

CREATE TABLE `login` (
  `NIC` varchar(10) NOT NULL default '',
  `uName` varchar(30) NOT NULL default '',
  `pwd` varchar(15) NOT NULL default '',
  `level` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`NIC`)
)

CREATE TABLE `post` (
  `NIC` varchar(10) NOT NULL default '',
  `doc` varchar(100) default 'No Post',
  `fDes` varchar(100) default 'No Post',
  `schol` varchar(100) default 'No Post',
  `announce` varchar(100) default 'No Post',
  PRIMARY KEY  (`NIC`)
)

CREATE TABLE `stu_education` (
  `NIC` varchar(10) NOT NULL default '',
  `degreeNo` int(10) unsigned NOT NULL default '0',
  `institute` varchar(45) NOT NULL default '',
  `from` varchar(10) NOT NULL default '',
  `to` varchar(10) NOT NULL default '',
  `major` varchar(45) NOT NULL default '',
  `degree` varchar(45) NOT NULL default '',
  `graDate` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`NIC`,`degreeNo`)
)

CREATE TABLE `stu_employee` (
  `NIC` varchar(10) NOT NULL default '',
  `empNo` int(10) unsigned NOT NULL default '0',
  `employer` varchar(45) NOT NULL default '',
  `from` varchar(10) NOT NULL default '0000-00-00',
  `to` varchar(10) NOT NULL default '0000-00-00',
  `duties` varchar(150) NOT NULL default '',
  PRIMARY KEY  USING BTREE (`NIC`,`empNo`)
)

CREATE TABLE `stu_personal` (
  `lName` varchar(45) NOT NULL default '',
  `fName` varchar(45) NOT NULL default '',
  `mName` varchar(45) NOT NULL default '',
  `applied` char(1) NOT NULL default '',
  `mStatus` char(1) NOT NULL default '',
  `NIC` varchar(10) NOT NULL default '',
  `gender` char(1) NOT NULL default '',
  `dob` date NOT NULL default '0000-00-00',
  `noStreet` varchar(45) NOT NULL default '',
  `city` varchar(45) NOT NULL default '',
  `state` varchar(45) NOT NULL default '',
  `pCode` varchar(45) NOT NULL default '',
  `email` varchar(45) NOT NULL default '',
  PRIMARY KEY  (`NIC`)
)

CREATE TABLE `stu_program` (
  `NIC` varchar(10) NOT NULL default '',
  `year` int(10) unsigned NOT NULL default '0',
  `session` char(1) NOT NULL default '',
  `attend` char(1) NOT NULL default '',
  `sDegree` varchar(45) NOT NULL default '',
  `field` varchar(45) NOT NULL default '',
  `assFello` char(1) NOT NULL default '',
  PRIMARY KEY  (`NIC`)
)

CREATE TABLE `stu_refree` (
  `NIC` varchar(10) NOT NULL default '',
  `refName` varchar(45) NOT NULL default '',
  `address` varchar(150) NOT NULL default '',
  `insLetter` char(1) NOT NULL default '',
  `refNo` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  USING BTREE (`NIC`,`refNo`)
)
