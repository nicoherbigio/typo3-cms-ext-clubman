plugin.tx_clubman {
    persistence {
        # cat=plugin.tx_clubman//a; type=string; label=Default storage PID
        storagePid =
    }
    view {
        # cat=plugin.tx_clubman/file; type=string; label=Path to template roots (FE)
        templateRootPath = EXT:clubman/Resources/Private/Templates/
        # cat=plugin.tx_clubman/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:clubman/Resources/Private/Partials/
        # cat=plugin.tx_clubman/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:clubman/Resources/Private/Layouts/
    }
    // PROTECTED REGION ID(constants.txt.own.plugin.code._18_0_3_16b8041b_1427039393754_974137_6523) ENABLED START
    settings {
        member {
            # displays a dummy image if the member has no picture
            displayDummyImage = 1
            dummyImage = typo3conf/ext/clubman/Resources/Public/Images/mystery-man.jpg

        }
    }
    // PROTECTED REGION END
}

// PROTECTED REGION ID(constants.txt.own.code._18_0_3_16b8041b_1427039393754_974137_6523) ENABLED START
// PROTECTED REGION END
