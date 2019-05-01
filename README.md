Cybersolutions Example Extension
=====================
This was created as a simple pratice on creating a magento extension

Facts
-----
- version: 1.0.0
- extension key: Cybersolutions_Example
- Exntensions is not added to Magento Connect
- [direct download link](tba)

Description
-----------
This extension adds a simple input field to the product page, under the description tab.
![Description Tab](tba)

An already running demo of the extension is avalible at:
Demo: [Hosted demo](https://dellia.co/test-product.html)


Requirements
------------
- PHP >= 7.2.0
- Mage_Core

Compatibility
-------------
- Magento >= 2.0

Installation Instructions
-------------------------
1. Navigate to your magento installation and go inside your `/app/code` folder  
2. Run `git clone git@github.com:snooty7/Cybersolutions.git` to clone the repository into the app folder
3. After that go back into your magento root directory and run `php bin/magento setup:upgrade` to install this extension
4. Next while still in the root directory also run `php bin/magento cache:clean`
5. The extension should now be installed.


Uninstallation
--------------
1. Remove the extension files from your Magento installation
2. You will also need to manually drop the table created by the extension with name `data_example`
3. Next you would need to run `php bin/magento cache:clean` and `php bin/magento cache:clean` from your root magento folder

Support
-------
If you have any issues with this extension, open an issue on [GitHub](https://github.com/company/Company_ExampleExtension/issues).


Developer
---------
Miroslav Trankov  
[http://miroslav.trankov.eu](http://miroslav.trankov.eu/)  



Copyright
---------
(c) 2018 Cybersolutions
