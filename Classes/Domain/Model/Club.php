<?php
namespace NicoHerbigIo\Clubman\Domain\Model;

/* PROTECTED REGION ID(php.class.own.use.imports._18_0_3_16b8041b_1427811727296_159662_7564) ENABLED START */
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
class Club extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity implements \NicoHerbigIo\Clubman\Domain\Model\ContactableInterface, \NicoHerbigIo\Clubman\Domain\Model\CommunicableInterface
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $shortName;

    /**
     * @var string
     */
    protected $number;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Team>
     * @lazy
     */
    protected $teams;

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
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Member>
     * @lazy
     */
    protected $members;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Organ>
     * @lazy
     */
    protected $organs;

    /**
     * @return boolean
     */
    public function hasContactData()
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1470594642314_420385_6164) ENABLED START */
        return $this->addresses->count() !== 0;
        /* PROTECTED REGION END */
    }

    /**
     * @return \NicoHerbigIo\Clubman\Domain\Model\Address
     */
    public function getCorrespondenceAddress()
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1463079032327_146283_5904) ENABLED START */
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
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1470595007198_922214_6285) ENABLED START */
        return $this->telephones->count() !== 0 || $this->emails->count() !== 0 || $this->websites->count() !== 0;
        /* PROTECTED REGION END */
    }

    /**
     * @return \NicoHerbigIo\Clubman\Domain\Model\Telephone
     */
    public function getCorrespondenceTelephone()
    {
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1463079036659_177291_5909) ENABLED START */
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
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1463079040916_720552_5914) ENABLED START */
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
        /* PROTECTED REGION ID(php.operation.own.code._18_0_5_16b8041b_1463079044701_910688_5919) ENABLED START */
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
     * Get accessor for name.
     *
     * @return string
     */
    public function getName()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_3_16b8041b_1427812136810_953095_7667) START */
        return $this->name;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for name.
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_3_16b8041b_1427812136810_953095_7667) START */
        $this->name = $name;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for shortName.
     *
     * @return string
     */
    public function getShortName()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_3_16b8041b_1427812161909_226637_7669) START */
        return $this->shortName;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for shortName.
     *
     * @param string $shortName
     * @return void
     */
    public function setShortName($shortName)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_3_16b8041b_1427812161909_226637_7669) START */
        $this->shortName = $shortName;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for number.
     *
     * @return string
     */
    public function getNumber()
    {
        /* PROTECTED REGION ID(php.attribute.get.own.code._18_0_5_16b8041b_1463588038396_940799_6247) START */
        return $this->number;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for number.
     *
     * @param string $number
     * @return void
     */
    public function setNumber($number = null)
    {
        /* PROTECTED REGION ID(php.attribute.set.own.code._18_0_5_16b8041b_1463588038396_940799_6247) START */
        $this->number = $number;
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for teams.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Team>
     */
    public function getTeams()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_3_16b8041b_1427812942192_108510_7941) START */
        return $this->teams;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for teams.
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Team> $teams
     * @return void
     */
    public function setTeams(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $teams = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_3_16b8041b_1427812942192_108510_7941) START */
        $this->teams = $teams;
        /* PROTECTED REGION END */
    }

    /**
     * Add accessor for teams.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Team $toAdd
     * @return void
     */
    public function addTeams(\NicoHerbigIo\Clubman\Domain\Model\Team $toAdd)
    {
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_3_16b8041b_1427812942192_108510_7941) START */
        $this->teams->attach($toAdd);
        /* PROTECTED REGION END */
    }

    /**
     * Remove accessor for teams.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Team $toRemove
     * @return void
     */
    public function removeTeams(\NicoHerbigIo\Clubman\Domain\Model\Team $toRemove)
    {
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_3_16b8041b_1427812942192_108510_7941) START */
        $this->teams->detach($toRemove);
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for addresses.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Address>
     */
    public function getAddresses()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1462443316472_737151_5999) START */
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
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1462443316472_737151_5999) START */
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
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_5_16b8041b_1462443316472_737151_5999) START */
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
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_5_16b8041b_1462443316472_737151_5999) START */
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
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1462700288440_142471_6640) START */
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
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1462700288440_142471_6640) START */
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
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_5_16b8041b_1462700288440_142471_6640) START */
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
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_5_16b8041b_1462700288440_142471_6640) START */
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
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1462700350452_478747_6695) START */
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
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1462700350452_478747_6695) START */
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
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_5_16b8041b_1462700350452_478747_6695) START */
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
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_5_16b8041b_1462700350452_478747_6695) START */
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
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1462700443518_65417_6750) START */
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
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1462700443518_65417_6750) START */
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
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_5_16b8041b_1462700443518_65417_6750) START */
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
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_5_16b8041b_1462700443518_65417_6750) START */
        $this->websites->detach($toRemove);
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for members.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Member>
     */
    public function getMembers()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1463246416948_302595_6009) START */
        return $this->members;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for members.
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Member> $members
     * @return void
     */
    public function setMembers(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $members = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1463246416948_302595_6009) START */
        $this->members = $members;
        /* PROTECTED REGION END */
    }

    /**
     * Add accessor for members.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Member $toAdd
     * @return void
     */
    public function addMembers(\NicoHerbigIo\Clubman\Domain\Model\Member $toAdd)
    {
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_5_16b8041b_1463246416948_302595_6009) START */
        $this->members->attach($toAdd);
        /* PROTECTED REGION END */
    }

    /**
     * Remove accessor for members.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Member $toRemove
     * @return void
     */
    public function removeMembers(\NicoHerbigIo\Clubman\Domain\Model\Member $toRemove)
    {
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_5_16b8041b_1463246416948_302595_6009) START */
        $this->members->detach($toRemove);
        /* PROTECTED REGION END */
    }

    /**
     * Get accessor for organs.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Organ>
     */
    public function getOrgans()
    {
        /* PROTECTED REGION ID(php.association.get.own.code._18_0_5_16b8041b_1470323906546_308615_6775) START */
        return $this->organs;
        /* PROTECTED REGION END */
    }

    /**
     * Set accessor for organs.
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\NicoHerbigIo\Clubman\Domain\Model\Organ> $organs
     * @return void
     */
    public function setOrgans(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $organs = null)
    {
        /* PROTECTED REGION ID(php.association.set.own.code._18_0_5_16b8041b_1470323906546_308615_6775) START */
        $this->organs = $organs;
        /* PROTECTED REGION END */
    }

    /**
     * Add accessor for organs.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Organ $toAdd
     * @return void
     */
    public function addOrgans(\NicoHerbigIo\Clubman\Domain\Model\Organ $toAdd)
    {
        /* PROTECTED REGION ID(php.association.add.own.code._18_0_5_16b8041b_1470323906546_308615_6775) START */
        $this->organs->attach($toAdd);
        /* PROTECTED REGION END */
    }

    /**
     * Remove accessor for organs.
     *
     * @param \NicoHerbigIo\Clubman\Domain\Model\Organ $toRemove
     * @return void
     */
    public function removeOrgans(\NicoHerbigIo\Clubman\Domain\Model\Organ $toRemove)
    {
        /* PROTECTED REGION ID(php.association.remove.own.code._18_0_5_16b8041b_1470323906546_308615_6775) START */
        $this->organs->detach($toRemove);
        /* PROTECTED REGION END */
    }

    /* PROTECTED REGION ID(php.class.own.code._18_0_3_16b8041b_1427811727296_159662_7564) ENABLED START */
    /* PROTECTED REGION END */

}
