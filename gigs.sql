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
DROP TABLE IF EXISTS Gig_responses;



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
ProjectDe TEXT DEFAULT '',
PayRate TEXT DEFAULT '',
LastUpdated TIMESTAMP DEFAULT 0 ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (GigID)
)ENGINE=INNODB;

INSERT INTO Gig VALUES (NULL,'I am a','select','Company Name','Company Address','City','State','Zip Code','Company Phone','Website','First Name','Last Name','Email','Phone','Work Experience','Interview Location','Appointment Time','Gig Description','Project Details','Pay Rate',NOW(),NOW());


CREATE TABLE Gig_responses(
GigResponsesID INT UNSIGNED NOT NULL AUTO_INCREMENT,
GigID INT UNSIGNED DEFAULT 0,
UserResponses TEXT DEFAULT '',

CompanyNameResponses TEXT DEFAULT '',
CompanyAddressResponses TEXT DEFAULT '',
CityResponses TEXT DEFAULT '',
STResponses TEXT DEFAULT '',
ZipCodeResponses TEXT DEFAULT '',
CoPhoneResponses TEXT DEFAULT '',
WebsiteResponses TEXT DEFAULT '',
DateAdded DATETIME,

FirstNameResponses TEXT DEFAULT '',
LastNameResponses TEXT DEFAULT '',
EmailResponses TEXT DEFAULT '',
PhoneResponses TEXT DEFAULT '',

WorkExperResponses TEXT DEFAULT '',
InterviewLocResponses TEXT DEFAULT '',
ApptTimeResponses DATETIME,
GigDescResponses TEXT DEFAULT '',
ProjectDeResponses TEXT DEFAULT '',
PayRateResponses TEXT DEFAULT '',

DateAdded DATETIME,
LastUpdated TIMESTAMP DEFAULT 0 ON UPDATE CURRENT_TIMESTAMP,
Status INT DEFAULT 0,
PRIMARY KEY (GigResponsesID),
INDEX Gig_index(GigID),
FOREIGN KEY (GigID) REFERENCES Gig(GigID) ON DELETE CASCADE
)ENGINE=INNODB;

INSERT INTO Gig_responses values (NULL,1,'Student','','','','',NOW(),NOW(),0);
INSERT INTO Gig_responses values (NULL,1,'Alumni','','','','',NOW(),NOW(),0);
INSERT INTO Gig_responses values (NULL,1,'Staff','','','','',NOW(),NOW(),0);
INSERT INTO Gig_responses values (NULL,1,'Employer','','','','',NOW(),NOW(),0);
INSERT INTO Gig_responses values (NULL,1,'Agency','','','','',NOW(),NOW(),0);