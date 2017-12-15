<?php
namespace NicoHerbigIo\Clubman\Domain\Model;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_5_16b8041b_1463645486769_885489_6907) ENABLED START */
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
class ContactPerson extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity implements \NicoHerbigIo\Clubman\Domain\Model\ContactableInterface, \NicoHerbigIo\Clubman\Domain\Model\CommunicableInterface
{

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Model\Gender
     */
    protected $gender;

    /**
     * @var string
     */
    protected $academicDegree;

    /**
     * @var string
     */
    protected $formOfAddress;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var \DateTime
     */
    protected $birthday;

    /**
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $picture;

    /**
     * @var string
     */
    protected $positionInCompany;

    /**
     * @var string
     */
    protected $formOfEmployment;

    /**
     * @var \NicoHerbigIo\Clubman\Domain\Model\LegalMember
     */
    protected $legalMember;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Website>
     */
    protected $websites;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\EMail>
     */
    protected $emails;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Telephone>
     */
    protected $telephones;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Address>
     */
    protected $addresses;

    /**
     * @return boolean
     */
    public function hasContactData()
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1470595061253_654191_6291) ENABLED START */
        return $this->addresses->count() !== 0;
        /* PROTECTED REGION END */
    }

    /**
     * @return \NicoHerbigIo\Clubman\Domain\Model\Address
     */
    public function getCorrespondenceAddress()
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1463646285439_893600_7210) ENABLED START */
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
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1470595050928_603667_6288) ENABLED START */
        return $this->telephones->count() !== 0 || $this->emails->count() !== 0 || $this->websites->count() !== 0;
        /* PROTECTED REGION END */
    }

    /**
     * @return \NicoHerbigIo\Clubman\Domain\Model\Telephone
     */
    public function getCorrespondenceTelephone()
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1463646287914_757519_7215) ENABLED START */
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
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1463646290243_188189_7220) ENABLED START */
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
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1463646291953_874188_7225) ENABLED START */
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
     * Get accessor for gender.
     *
     * @return \NicoHerbigIo\Clubman\Domain\Model\Gender
     */
    public function getGender()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463645548244_15986_6936) START */
        return $this->gender;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for gender.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Gender $gender
     * @return void
     */
    public function setGender(\NicoHerbigIo\Clubman\Domain\Model\Gender $gender = null)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463645548244_15986_6936) START */
        $this->gender = $gender;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for academicDegree.
     *
     * @return string
     */
    public function getAcademicDegree()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463645563580_134517_6940) START */
        return $this->academicDegree;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for academicDegree.
     *
     * @param string $academicDegree
     * @return void
     */
    public function setAcademicDegree($academicDegree = null)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463645563580_134517_6940) START */
        $this->academicDegree = $academicDegree;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for formOfAddress.
     *
     * @return string
     */
    public function getFormOfAddress()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463645566336_375652_6944) START */
        return $this->formOfAddress;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for formOfAddress.
     *
     * @param string $formOfAddress
     * @return void
     */
    public function setFormOfAddress($formOfAddress = null)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463645566336_375652_6944) START */
        $this->formOfAddress = $formOfAddress;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463645568654_363102_6948) START */
        return $this->firstName;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for firstName.
     *
     * @param string $firstName
     * @return void
     */
    public function setFirstName($firstName)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463645568654_363102_6948) START */
        $this->firstName = $firstName;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463645570937_679214_6952) START */
        return $this->lastName;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for lastName.
     *
     * @param string $lastName
     * @return void
     */
    public function setLastName($lastName)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463645570937_679214_6952) START */
        $this->lastName = $lastName;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for birthday.
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463645578351_675970_6956) START */
        return $this->birthday;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for birthday.
     *
     * @param \DateTime $birthday
     * @return void
     */
    public function setBirthday(\DateTime $birthday = null)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463645578351_675970_6956) START */
        $this->birthday = $birthday;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for picture.
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getPicture()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463646211808_248416_7170) START */
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
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463646211808_248416_7170) START */
        $this->picture = $picture;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for positionInCompany.
     *
     * @return string
     */
    public function getPositionInCompany()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463648436449_328426_7276) START */
        return $this->positionInCompany;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for positionInCompany.
     *
     * @param string $positionInCompany
     * @return void
     */
    public function setPositionInCompany($positionInCompany)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463648436449_328426_7276) START */
        $this->positionInCompany = $positionInCompany;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for formOfEmployment.
     *
     * @return string
     */
    public function getFormOfEmployment()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463648439193_11896_7278) START */
        return $this->formOfEmployment;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for formOfEmployment.
     *
     * @param string $formOfEmployment
     * @return void
     */
    public function setFormOfEmployment($formOfEmployment)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463648439193_11896_7278) START */
        $this->formOfEmployment = $formOfEmployment;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for legalMember.
     *
     * @return \NicoHerbigIo\Clubman\Domain\Model\LegalMember
     */
    public function getLegalMember()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1463645486780_241512_6910) START */
        return $this->legalMember;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for legalMember.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\LegalMember $legalMember
     * @return void
     */
    public function setLegalMember(\NicoHerbigIo\Clubman\Domain\Model\LegalMember $legalMember)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1463645486780_241512_6910) START */
        $this->legalMember = $legalMember;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for websites.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Website>
     */
    public function getWebsites()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1463645670205_167197_6990) START */
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
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1463645670205_167197_6990) START */
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
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_5_16b8041b_1463645670205_167197_6990) START */
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
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_5_16b8041b_1463645670205_167197_6990) START */
        $this->websites->detach($toRemove);
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for emails.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\EMail>
     */
    public function getEmails()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1463645677203_179465_7023) START */
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
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1463645677203_179465_7023) START */
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
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_5_16b8041b_1463645677203_179465_7023) START */
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
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_5_16b8041b_1463645677203_179465_7023) START */
        $this->emails->detach($toRemove);
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for telephones.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Telephone>
     */
    public function getTelephones()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1463645680498_563118_7056) START */
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
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1463645680498_563118_7056) START */
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
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_5_16b8041b_1463645680498_563118_7056) START */
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
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_5_16b8041b_1463645680498_563118_7056) START */
        $this->telephones->detach($toRemove);
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for addresses.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Address>
     */
    public function getAddresses()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1463645689176_846163_7089) START */
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
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1463645689176_846163_7089) START */
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
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_5_16b8041b_1463645689176_846163_7089) START */
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
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_5_16b8041b_1463645689176_846163_7089) START */
        $this->addresses->detach($toRemove);
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_5_16b8041b_1463645486769_885489_6907) ENABLED START */
    /* PROTECTED REGION END */

}
