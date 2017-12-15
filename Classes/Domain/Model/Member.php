<?php
namespace NicoHerbigIo\Clubman\Domain\Model;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_3_16b8041b_1427040492147_818624_7401) ENABLED START */
/* PROTECTED REGION END */

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 - 2016 Nico Herbig
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Member extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity implements \NicoHerbigIo\Clubman\Domain\Model\ContactableInterface, \NicoHerbigIo\Clubman\Domain\Model\CommunicableInterface
{

    /**
     * @var string
     */
    protected $number;

    /**
     * @var \DateTime
     */
    protected $dateOfJoining;

    /**
     * @var \DateTime
     */
    protected $dateOfLeaving;

    /**
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $picture;

    /**
     * @var \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
     */
    protected $frontendUser;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Address>
     */
    protected $addresses;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Telephone>
     */
    protected $telephones;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\EMail>
     */
    protected $emails;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Website>
     */
    protected $websites;

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Model\Club
     */
    protected $club;

    /**
     * @return boolean
     */
    public function hasContactData()
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1470594321159_656200_6144) ENABLED START */
        return $this->addresses->count() !== 0;
        /* PROTECTED REGION END */
    }

    /**
     * @return \NicoHerbigIo\Clubman\Domain\Model\Address
     */
    public function getCorrespondenceAddress()
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1463134254819_702291_7260) ENABLED START */
        /** @var Address $address */
        foreach ($this->addresses as $address) {
            if ($address->getIsCorrespondence() === true) {
                return $address;
            }
        }
        return null;
        /* PROTECTED REGION END */
    }

    /**
     * @return boolean
     */
    public function hasCommunicationData()
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1470599112495_797117_6309) ENABLED START */
        return $this->telephones->count() !== 0 || $this->emails->count() !== 0 || $this->websites->count() !== 0;
        /* PROTECTED REGION END */
    }

    /**
     * @return \NicoHerbigIo\Clubman\Domain\Model\Telephone
     */
    public function getCorrespondenceTelephone()
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1463134257994_490925_7265) ENABLED START */
        /** @var Telephone $telephone */
        foreach ($this->telephones as $telephone) {
            if ($telephone->getIsCorrespondence() === true) {
                return $telephone;
            }
        }
        return null;
        /* PROTECTED REGION END */
    }

    /**
     * @return \NicoHerbigIo\Clubman\Domain\Model\EMail
     */
    public function getCorrespondenceEMail()
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1463134260586_275117_7270) ENABLED START */
        /** @var EMail $email */
        foreach ($this->emails as $email) {
            if ($email->getIsCorrespondence() === true) {
                return $email;
            }
        }
        return null;
        /* PROTECTED REGION END */
    }

    /**
     * @return \NicoHerbigIo\Clubman\Domain\Model\Website
     */
    public function getCorrespondenceWebsite()
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1463134263258_391534_7275) ENABLED START */
        /** @var Website $website */
        foreach ($this->websites as $website) {
            if ($website->getIsCorrespondence() === true) {
                return $website;
            }
        }
        return null;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for number.
     *
     * @return string
     */
    public function getNumber()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463133759464_105593_6977) START */
        return $this->number;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for number.
     *
     * @param string $number
     * @return void
     */
    public function setNumber($number)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463133759464_105593_6977) START */
        $this->number = $number;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for dateOfJoining.
     *
     * @return \DateTime
     */
    public function getDateOfJoining()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463643948650_981940_6297) START */
        return $this->dateOfJoining;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for dateOfJoining.
     *
     * @param \DateTime $dateOfJoining
     * @return void
     */
    public function setDateOfJoining(\DateTime $dateOfJoining = null)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463643948650_981940_6297) START */
        $this->dateOfJoining = $dateOfJoining;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for dateOfLeaving.
     *
     * @return \DateTime
     */
    public function getDateOfLeaving()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463647769093_84698_7268) START */
        return $this->dateOfLeaving;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for dateOfLeaving.
     *
     * @param \DateTime $dateOfLeaving
     * @return void
     */
    public function setDateOfLeaving(\DateTime $dateOfLeaving = null)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463647769093_84698_7268) START */
        $this->dateOfLeaving = $dateOfLeaving;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for picture.
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getPicture()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1454056737260_374451_6267) START */
        return $this->picture;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for picture.
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $picture
     * @return void
     */
    public function setPicture(\TYPO3\CMS\Extbase\Domain\Model\FileReference $picture = null)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1454056737260_374451_6267) START */
        $this->picture = $picture;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for frontendUser.
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
     */
    public function getFrontendUser()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_3_16b8041b_1428077896230_533563_5642) START */
        return $this->frontendUser;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for frontendUser.
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FrontendUser $frontendUser
     * @return void
     */
    public function setFrontendUser(\TYPO3\CMS\Extbase\Domain\Model\FrontendUser $frontendUser = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_3_16b8041b_1428077896230_533563_5642) START */
        $this->frontendUser = $frontendUser;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for addresses.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Address>
     */
    public function getAddresses()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1463134001102_835571_7022) START */
        return $this->addresses;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for addresses.
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Address> $addresses
     * @return void
     */
    public function setAddresses(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $addresses = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1463134001102_835571_7022) START */
        $this->addresses = $addresses;
        /* PROTECTED REGION END */
    }

    /**
     * Add accessor for addresses.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Address $toAdd
     * @return void
     */
    public function addAddresses(\NicoHerbigIo\Clubman\Domain\Model\Address $toAdd)
    {
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_5_16b8041b_1463134001102_835571_7022) START */
        $this->addresses->attach($toAdd);
        /* PROTECTED REGION END */
    }

    /**
     * Remove accessor for addresses.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Address $toRemove
     * @return void
     */
    public function removeAddresses(\NicoHerbigIo\Clubman\Domain\Model\Address $toRemove)
    {
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_5_16b8041b_1463134001102_835571_7022) START */
        $this->addresses->detach($toRemove);
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for telephones.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Telephone>
     */
    public function getTelephones()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1463134004829_759026_7055) START */
        return $this->telephones;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for telephones.
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Telephone> $telephones
     * @return void
     */
    public function setTelephones(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $telephones = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1463134004829_759026_7055) START */
        $this->telephones = $telephones;
        /* PROTECTED REGION END */
    }

    /**
     * Add accessor for telephones.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Telephone $toAdd
     * @return void
     */
    public function addTelephones(\NicoHerbigIo\Clubman\Domain\Model\Telephone $toAdd)
    {
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_5_16b8041b_1463134004829_759026_7055) START */
        $this->telephones->attach($toAdd);
        /* PROTECTED REGION END */
    }

    /**
     * Remove accessor for telephones.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Telephone $toRemove
     * @return void
     */
    public function removeTelephones(\NicoHerbigIo\Clubman\Domain\Model\Telephone $toRemove)
    {
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_5_16b8041b_1463134004829_759026_7055) START */
        $this->telephones->detach($toRemove);
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for emails.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\EMail>
     */
    public function getEmails()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1463134008377_17268_7088) START */
        return $this->emails;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for emails.
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\EMail> $emails
     * @return void
     */
    public function setEmails(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $emails = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1463134008377_17268_7088) START */
        $this->emails = $emails;
        /* PROTECTED REGION END */
    }

    /**
     * Add accessor for emails.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\EMail $toAdd
     * @return void
     */
    public function addEmails(\NicoHerbigIo\Clubman\Domain\Model\EMail $toAdd)
    {
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_5_16b8041b_1463134008377_17268_7088) START */
        $this->emails->attach($toAdd);
        /* PROTECTED REGION END */
    }

    /**
     * Remove accessor for emails.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\EMail $toRemove
     * @return void
     */
    public function removeEmails(\NicoHerbigIo\Clubman\Domain\Model\EMail $toRemove)
    {
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_5_16b8041b_1463134008377_17268_7088) START */
        $this->emails->detach($toRemove);
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for websites.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Website>
     */
    public function getWebsites()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1463134014305_836943_7121) START */
        return $this->websites;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for websites.
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Website> $websites
     * @return void
     */
    public function setWebsites(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $websites = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1463134014305_836943_7121) START */
        $this->websites = $websites;
        /* PROTECTED REGION END */
    }

    /**
     * Add accessor for websites.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Website $toAdd
     * @return void
     */
    public function addWebsites(\NicoHerbigIo\Clubman\Domain\Model\Website $toAdd)
    {
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_5_16b8041b_1463134014305_836943_7121) START */
        $this->websites->attach($toAdd);
        /* PROTECTED REGION END */
    }

    /**
     * Remove accessor for websites.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Website $toRemove
     * @return void
     */
    public function removeWebsites(\NicoHerbigIo\Clubman\Domain\Model\Website $toRemove)
    {
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_5_16b8041b_1463134014305_836943_7121) START */
        $this->websites->detach($toRemove);
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for club.
     *
     * @return \NicoHerbigIo\Clubman\Domain\Model\Club
     */
    public function getClub()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1463246416948_55375_6010) START */
        return $this->club;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for club.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Club $club
     * @return void
     */
    public function setClub(\NicoHerbigIo\Clubman\Domain\Model\Club $club)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1463246416948_55375_6010) START */
        $this->club = $club;
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_3_16b8041b_1427040492147_818624_7401) ENABLED START */
    /* PROTECTED REGION END */

}
