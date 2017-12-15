plugin.tx_clubman {
    persistence {
        storagePid = {$plugin.tx_clubman.persistence.storagePid}
    }
    view {
        templateRootPaths {
            10 = EXT:clubman/Resources/Private/Templates/
            20 = {$plugin.tx_clubman.view.templateRootPath}
        }
        partialRootPaths {
            10 = EXT:clubman/Resources/Private/Partials/
            20 = {$plugin.tx_clubman.view.partialRootPath}
        }
        layoutRootPaths {
            10 = EXT:clubman/Resources/Private/Layouts/
            20 = {$plugin.tx_clubman.view.layoutRootPath}
        }
    }
    // PROTECTED REGION ID(setup.txt.own.plugin.code._18_0_3_16b8041b_1427039393754_974137_6523) ENABLED START
    settings {
        member {
            displayDummyImage = {$plugin.tx_clubman.settings.member.displayDummyImage}
            dummyImage = {$plugin.tx_clubman.settings.member.dummyImage}
        }
    }
    // PROTECTED REGION END
}

config.tx_extbase {
    persistence {
        classes {
            NicoHerbigIo\Clubman\Domain\Model\LegalMember {
                mapping {
                    tableName = tx_clubman_domain_model_member
                    recordType = NicoHerbigIo\Clubman\Domain\Model\LegalMember
                }
            }
            NicoHerbigIo\Clubman\Domain\Model\Member {
                mapping {
                    tableName = tx_clubman_domain_model_member
                    recordType = NicoHerbigIo\Clubman\Domain\Model\Member
                }
                subclasses {
                    NicoHerbigIo\Clubman\Domain\Model\LegalMember = NicoHerbigIo\Clubman\Domain\Model\LegalMember
                    NicoHerbigIo\Clubman\Domain\Model\NaturalMember = NicoHerbigIo\Clubman\Domain\Model\NaturalMember
                }
            }
            NicoHerbigIo\Clubman\Domain\Model\NaturalMember {
                mapping {
                    tableName = tx_clubman_domain_model_member
                    recordType = NicoHerbigIo\Clubman\Domain\Model\NaturalMember
                }
            }
        }
    }
}

// PROTECTED REGION ID(setup.txt.own.code._18_0_3_16b8041b_1427039393754_974137_6523) ENABLED START
// PROTECTED REGION END
