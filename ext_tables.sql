#
# Table structure for table 'tx_clubman_domain_model_address'
#
CREATE TABLE tx_clubman_domain_model_address (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    is_correspondence tinyint(1) unsigned DEFAULT '0' NOT NULL,
    street varchar(100) DEFAULT '' NOT NULL,
    street_number varchar(20) DEFAULT '' NOT NULL,
    room_number varchar(20) DEFAULT '' NOT NULL,
    postal_code varchar(20) DEFAULT '' NOT NULL,
    locality varchar(50) DEFAULT '' NOT NULL,
    sub_locality varchar(50) DEFAULT '' NOT NULL,
    country varchar(50) DEFAULT '' NOT NULL,
    type int(11) unsigned DEFAULT '0' NOT NULL,
    club int(11) unsigned DEFAULT '0' NOT NULL,
    member int(11) unsigned DEFAULT '0' NOT NULL,
    contact_person int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_addresstype'
#
CREATE TABLE tx_clubman_domain_model_addresstype (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    label varchar(100) DEFAULT '' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_club'
#
CREATE TABLE tx_clubman_domain_model_club (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    name varchar(200) DEFAULT '' NOT NULL,
    short_name varchar(50) DEFAULT '' NOT NULL,
    number varchar(20) DEFAULT '' NOT NULL,
    teams int(11) unsigned DEFAULT '0' NOT NULL,
    addresses int(11) unsigned DEFAULT '0' NOT NULL,
    telephones int(11) unsigned DEFAULT '0' NOT NULL,
    emails int(11) unsigned DEFAULT '0' NOT NULL,
    websites int(11) unsigned DEFAULT '0' NOT NULL,
    members int(11) unsigned DEFAULT '0' NOT NULL,
    organs int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_contactperson'
#
CREATE TABLE tx_clubman_domain_model_contactperson (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    gender varchar(255) DEFAULT '' NOT NULL,
    academic_degree varchar(20) DEFAULT '' NOT NULL,
    form_of_address varchar(50) DEFAULT '' NOT NULL,
    first_name varchar(50) DEFAULT '' NOT NULL,
    last_name varchar(50) DEFAULT '' NOT NULL,
    birthday int(11) unsigned DEFAULT '0' NOT NULL,
    picture int(11) unsigned DEFAULT '0' NOT NULL,
    position_in_company varchar(50) DEFAULT '' NOT NULL,
    form_of_employment varchar(50) DEFAULT '' NOT NULL,
    legal_member int(11) unsigned DEFAULT '0' NOT NULL,
    websites int(11) unsigned DEFAULT '0' NOT NULL,
    emails int(11) unsigned DEFAULT '0' NOT NULL,
    telephones int(11) unsigned DEFAULT '0' NOT NULL,
    addresses int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_directormembership'
#
CREATE TABLE tx_clubman_domain_model_directormembership (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    sorting int(11) DEFAULT '0' NOT NULL,
    description text NOT NULL,
    member int(11) unsigned DEFAULT '0' NOT NULL,
    position int(11) unsigned DEFAULT '0' NOT NULL,
    team int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_directorposition'
#
CREATE TABLE tx_clubman_domain_model_directorposition (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    label varchar(100) DEFAULT '' NOT NULL,
    male_label varchar(100) DEFAULT '' NOT NULL,
    female_label varchar(100) DEFAULT '' NOT NULL,

    sorting int(11) DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_email'
#
CREATE TABLE tx_clubman_domain_model_email (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    is_correspondence tinyint(1) unsigned DEFAULT '0' NOT NULL,
    email varchar(100) DEFAULT '' NOT NULL,
    type int(11) unsigned DEFAULT '0' NOT NULL,
    club int(11) unsigned DEFAULT '0' NOT NULL,
    member int(11) unsigned DEFAULT '0' NOT NULL,
    contact_person int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_emailtype'
#
CREATE TABLE tx_clubman_domain_model_emailtype (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    label varchar(100) DEFAULT '' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_member'
#
CREATE TABLE tx_clubman_domain_model_member (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    number varchar(20) DEFAULT '' NOT NULL,
    date_of_joining int(11) unsigned DEFAULT '0' NOT NULL,
    date_of_leaving int(11) unsigned DEFAULT '0' NOT NULL,
    picture int(11) unsigned DEFAULT '0' NOT NULL,
    frontend_user int(11) unsigned DEFAULT '0' NOT NULL,
    addresses int(11) unsigned DEFAULT '0' NOT NULL,
    telephones int(11) unsigned DEFAULT '0' NOT NULL,
    emails int(11) unsigned DEFAULT '0' NOT NULL,
    websites int(11) unsigned DEFAULT '0' NOT NULL,
    club int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_organ'
#
CREATE TABLE tx_clubman_domain_model_organ (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    name varchar(200) DEFAULT '' NOT NULL,
    short_name varchar(50) DEFAULT '' NOT NULL,
    members int(11) unsigned DEFAULT '0' NOT NULL,
    club int(11) unsigned DEFAULT '0' NOT NULL,

    sorting int(11) DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_organmembership'
#
CREATE TABLE tx_clubman_domain_model_organmembership (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    sorting int(11) DEFAULT '0' NOT NULL,
    description text NOT NULL,
    member int(11) unsigned DEFAULT '0' NOT NULL,
    organ int(11) unsigned DEFAULT '0' NOT NULL,
    position int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_organposition'
#
CREATE TABLE tx_clubman_domain_model_organposition (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    label varchar(100) DEFAULT '' NOT NULL,
    male_label varchar(100) DEFAULT '' NOT NULL,
    female_label varchar(100) DEFAULT '' NOT NULL,

    sorting int(11) DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_team'
#
CREATE TABLE tx_clubman_domain_model_team (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    name varchar(200) DEFAULT '' NOT NULL,
    short_name varchar(50) DEFAULT '' NOT NULL,
    club int(11) unsigned DEFAULT '0' NOT NULL,
    teammates int(11) unsigned DEFAULT '0' NOT NULL,
    directors int(11) unsigned DEFAULT '0' NOT NULL,

    sorting int(11) DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_teammembership'
#
CREATE TABLE tx_clubman_domain_model_teammembership (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    sorting int(11) DEFAULT '0' NOT NULL,
    description text NOT NULL,
    number varchar(20) DEFAULT '' NOT NULL,
    member int(11) unsigned DEFAULT '0' NOT NULL,
    team int(11) unsigned DEFAULT '0' NOT NULL,
    position int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_teamposition'
#
CREATE TABLE tx_clubman_domain_model_teamposition (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    label varchar(100) DEFAULT '' NOT NULL,
    male_label varchar(100) DEFAULT '' NOT NULL,
    female_label varchar(100) DEFAULT '' NOT NULL,

    sorting int(11) DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_telephone'
#
CREATE TABLE tx_clubman_domain_model_telephone (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    is_correspondence tinyint(1) unsigned DEFAULT '0' NOT NULL,
    telephone varchar(50) DEFAULT '' NOT NULL,
    type int(11) unsigned DEFAULT '0' NOT NULL,
    club int(11) unsigned DEFAULT '0' NOT NULL,
    member int(11) unsigned DEFAULT '0' NOT NULL,
    contact_person int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_telephonetype'
#
CREATE TABLE tx_clubman_domain_model_telephonetype (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    label varchar(100) DEFAULT '' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_website'
#
CREATE TABLE tx_clubman_domain_model_website (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    is_correspondence tinyint(1) unsigned DEFAULT '0' NOT NULL,
    website varchar(200) DEFAULT '' NOT NULL,
    type int(11) unsigned DEFAULT '0' NOT NULL,
    club int(11) unsigned DEFAULT '0' NOT NULL,
    member int(11) unsigned DEFAULT '0' NOT NULL,
    contact_person int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_websitetype'
#
CREATE TABLE tx_clubman_domain_model_websitetype (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    label varchar(100) DEFAULT '' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

#
# Table structure for table 'tx_clubman_domain_model_naturalmember'
#
CREATE TABLE tx_clubman_domain_model_member (
    last_name varchar(50) DEFAULT '' NOT NULL,
    first_name varchar(50) DEFAULT '' NOT NULL,
    gender varchar(255) DEFAULT '' NOT NULL,
    academic_degree varchar(20) DEFAULT '' NOT NULL,
    form_of_address varchar(50) DEFAULT '' NOT NULL,
    birthday int(11) unsigned DEFAULT '0' NOT NULL,
    name_of_company varchar(100) DEFAULT '' NOT NULL,
    position_in_company varchar(50) DEFAULT '' NOT NULL,
    form_of_employment varchar(50) DEFAULT '' NOT NULL,

    type varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_clubman_domain_model_legalmember'
#
CREATE TABLE tx_clubman_domain_model_member (
    name varchar(100) DEFAULT '' NOT NULL,
    contact_persons int(11) unsigned DEFAULT '0' NOT NULL,

    type varchar(255) DEFAULT '' NOT NULL,

);

# PROTECTED REGION ID(ext_tables.sql.own.code._18_0_3_16b8041b_1427039393754_974137_6523) ENABLED START
# PROTECTED REGION END
