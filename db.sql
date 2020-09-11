
CREATE TABLE auditor_staff (
    StaffID int(10) primary key auto_increment,
    access_level varchar(100),
    username varchar(100),
    aditorID int(10),password varchar(100));

CREATE TABLE accounttran (
id int(10) primary key auto_increment,
Date date,
p
cheqnum varchar(100) not null,
Details text, 
Amount varchar(100),
AccountCode varchar(100),
status varchar(90));

CREATE TABLE auditedtran (
id int(10) primary key auto_increment,
AccountCode varchar(100),
FinacialRegulation varchar(100),
GovernmentCircular varchar(100),
ProcRegulation varchar(100),
StoresRegulations varchar(100),
OtherRegulation varchar(100),
status varchar(100));

CREATE TABLE auditors (
id int(10) primary key auto_increment,
firstname varchar(100),
surname varchar(100),
email varchar(100),
mobile varchar(100),
username varchar(100),
password varchar(100),
accountLevel varchar(100),
status varchar(100));