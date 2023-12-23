# Nordicmotorcenter_CustomerNavigation module

# Overview
This module adds template to customer Navigation links in the header. And in Customer Account Navigation links in the sidebar.

## Installation details
Before installing this module, note that the Magento_Customer module depends on the Magento_Theme module, 
which means that the Magento_Theme module must be installed before the Magento_Customer module is installed.

## Configuration
There is a setting in the admin panel under 
Stores -> Configuration -> Customer -> Customer Navigation -> Navigation Settings -> Customer Account Navigation. 
This setting is used to enable or disable Nordicmotorcenter_CustomerNavigation/Plugin/AccountNavigation.
If the setting is enabled, the customer account navigation links in the sidebar will be displayed as links even if it is current link.
Stores -> Configuration -> Customer -> Customer Navigation -> Navigation Settings -> Add name in layout As link class. 
This setting is used to add the name of the link in the layout as a class to the link. This is to make it possible to add icons for example in the links.


## How to use
After installing the module, the customer navigation links in the header and in the 
sidebar will be displayed as links even if it is current link. This is to make it possible to add icons for example in the links.

## Theme Extensibility
Extends Nordicmotorcenter_CustomerNavigation/templates/account/link.phtml template.
This makes it possible to make a customisation of the template in your own theme.

## Additional information
Example of how to add icons to the links in the sidebar and top.links. If setting Add name in layout As link class is enabled.
`````
// Customer Navigation links in Customer Account sidebar
.block-collapsible-nav .nav.item .customer-account-navigation-account-link {
    // If you use svg icons
    &::before {    
        content: "";
        background-image: url('@{baseDir}Vendor_Module/icons/icon.svg');
        background-size: 16px 16px;
        background-repeat: no-repeat;
        position:relative;
        display:inline-block;
        top:2px;
        height: 16px;
        width: 16px;
        padding-right: 5px;
    }
    // If you use font icons
    &::before {    
        content: "\f007";
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        font-size: 16px;
        position:relative;
        display:inline-block;
        top:2px;
        height: 16px;
        width: 16px;
        padding-right: 5px;
    }
}
// Customer Navigation links in header
.header.links .nav.item .my-account-link {

    // If you use svg icons
    &::before {    
        content: "";
        background-image: url('@{baseDir}Vendor_Module/icons/icon.svg');
        background-size: 16px 16px;
        background-repeat: no-repeat;
        position:relative;
        display:inline-block;
        top:2px;
        height: 16px;
        width: 16px;
        padding-right: 5px;
    }
    // If you use font icons
    &::before {    
        content: "\f007";
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        font-size: 16px;
        position:relative;
        display:inline-block;
        top:2px;
        height: 16px;
        width: 16px;
        padding-right: 5px;
    }
}
`````
