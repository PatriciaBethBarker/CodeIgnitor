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

CREATE TABLE Gig(
GigID INT UNSIGNED NOT NULL AUTO_INCREMENT,
User TEXT DEFAULT '',
InputType ENUM('checkbox','radio','select','text') DEFAULT 'select',
CompanyName TEXT DEFAULT '',
CompanyAddress TEXT DEFAULT '',
City TEXT DEFAULT '',
ST TEXT DEFAULT '',
ZipCode TEXT DEFAULT '',
CoPhone TEXT DEFAULT '',
Website TEXT DEFAULT '',
DateAdded DATETIME,

FirstName TEXT DEFAULT '',
LastName TEXT DEFAULT '',
Email TEXT DEFAULT '',
Phone TEXT DEFAULT '',

WorkExper TEXT DEFAULT '',
InterviewLoc TEXT DEFAULT '',
ApptTime DATETIME,
GigDesc TEXT DEFAULT '',
ProDetail TEXT DEFAULT '',
PayRate TEXT DEFAULT '',
LastUpdated TIMESTAMP DEFAULT 0 ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (GigID)
)ENGINE=INNODB;


