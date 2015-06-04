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
* @see form.php
* @see gigs_form/index.php
* @todo none
*/


SET foreign_key_checks = 0; #turn off constraints temporarily

DROP TABLE IF EXISTS Gig;

CREATE TABLE Company(
CompanyID INT UNSIGNED NOT NULL AUTO_INCREMENT,
User varchar(255),
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
FOREIGN KEY (GigID) REFERENCES ContactID (CompanyID)
FOREIGN KEY (ContactID) REFERENCES GigID(CompanyID)
)ENGINE=INNODB;

CREATE TABEL Contact(
ContactID INT UNSIGNED NOT NULL AUTO_INCREMENT,
FirstName varchar(30) NOT NULL,
LastName varchar(30) NOT NULL,
Email varchar(75) NULL,
Phone varchar(25) NOT NULL,
PRIMARY KEY (CompanyID)
FOREIGN KEY (GigID) REFERENCES ContactID (CompanyID)
FOREIGN KEY (ContactID) REFERENCES GigID(CompanyID)
)ENGINE=INNODB;

CREATE TABLE Gig(
GigID INT UNSIGNED NOT NULL AUTO_INCREMENT,
WorkExper varchar(500) NOT NULL,
InterviewLoc varchar(255) NOT NULL,
ApptTime varchar(255) NOT NULL,
GigDesc varchar(500) NOT NULL,
ProDetail varchar(350) NULL,
PayRate varchar(50) NOT NULL,
LastUpdated TIMESTAMP DEFAULT 0 ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (CompanyID)
FOREIGN KEY (GigID) REFERENCES ContactID(CompanyID)
FOREIGN KEY (ContactID) REFERENCES GigID(CompanyID)
)ENGINE=INNODB; #INNODB allows creation table w/the same name in another db, table names will not collide

