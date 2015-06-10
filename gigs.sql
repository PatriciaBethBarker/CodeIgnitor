/**
* Gigs.sql
*
* Use to store data from profile form
*
* @package small piece of program
* @subpackage Gigs_form
* @author Patricia Barker <patriciabethbarker@gmail.com>
* @version 1.0 2015/06/03
* @link http://www.example.com/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see add.php
* @see gigs_form/add.php
* @todo none
*/


SET foreign_key_checks = 0; #turn off constraints temporarily

DROP TABLE IF EXISTS Company;
DROP TABLE IF EXISTS Contact;
DROP TABLE IF EXISTS Gigs;

CREATE TABLE Company(
CompanyID INT UNSIGNED NOT NULL AUTO_INCREMENT,
InputType ENUM('checkbox','radio','select','text') DEFAULT 'select',
CompanyName varchar(100) NOT NULL,
CompanyAddress varchar(85) NOT NULL,
City varchar(40) NOT NULL,
ST varchar(25) NOT NULL DEFAULT "WA",
ZipCode MEDIUMINT UNSIGNED NOT NULL,
CoPhone varchar(25) NOT NULL,
Website varchar(100) NOT NULL,
DateAdded DATETIME,
PRIMARY KEY (CompanyID)
FOREIGN KEY (GigsID) REFERENCES Contact (ContactID)
FOREIGN KEY (ContactID) REFERENCES Gigs(GigsID)
)ENGINE=INNODB;

CREATE TABLE Contact(
ContactID INT UNSIGNED NOT NULL AUTO_INCREMENT,
FirstName varchar(30) NOT NULL,
LastName varchar(30) NOT NULL,
Email varchar(75) DEFAULT '',
Phone varchar(25) NOT NULL,
PRIMARY KEY (CompanyID)
FOREIGN KEY (GigsID) REFERENCES Contact(ContactID)
FOREIGN KEY (ContactID) REFERENCES Gigs(GigsID)
)ENGINE=INNODB;

CREATE TABLE Gigs(
GigsID INT UNSIGNED NOT NULL AUTO_INCREMENT,
WorkExper varchar(500) NOT NULL,
InterviewLoc varchar(255) NOT NULL,
ApptTime varchar(255) NOT NULL,
GigDesc varchar(500) NOT NULL,
ProDetail varchar(350) DEFAULT '',
PayRate varchar(50) NOT NULL,
LastUpdated TIMESTAMP DEFAULT 0 ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (CompanyID)
FOREIGN KEY (GigsID) REFERENCES Contact(ContactID)
FOREIGN KEY (ContactID) REFERENCES Gigs(GigsID)
)ENGINE=INNODB; #INNODB allows creation table w/the same name in another db, table names will not collide

