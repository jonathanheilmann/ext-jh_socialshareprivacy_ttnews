

.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)


ChangeLog
---------

.. ### BEGIN~OF~TABLE ###

.. t3-field-list-table::
 :header-rows: 1

 - :Version:
         Version

   :Changes:
         Changes


 - :Version:
         1.0.0

   :Changes:
         \* Rewritten for TYPO3 CMS 6.2 LTS

         \* Moved JavaScript Libs to footer and dynamic JavaScript to inline

         \* Moved translation to setup and removed locallang.xml

         \* Removed deprecated JavaScript in setup

         \* Updated documentation


 - :Version:
         0.0.13

   :Changes:
         \* Added dependencies.

         \* Converted manual to rest documentation.


 - :Version:
         0.0.12

   :Changes:
         \* updated jquery.socialshareprivacy.js to work with jQuery version >
         1.7.x

         \* added jquery-1.6.4.min.js to provide jQuery for
         jquery.socialshareprivacy.deprecated.js

         \* added setup 'plugin.tt\_news.tx\_jhsocialshareprivacyttnews\_pi1.us
         e\_socialshareprivacy\_deprecated' to use
         jquery.socialshareprivacy.deprecated.js

         \* added setup 'plugin.tt\_news.tx\_jhsocialshareprivacyttnews\_pi1.so
         cialshareprivacy\_deprecated\_path'

         \* added setup 'plugin.tt\_news.tx\_jhsocialshareprivacyttnews\_pi1.jq
         uery\_old\_path' to change path to an old jQuery version

         \* updated manual


 - :Version:
         0.0.11

   :Changes:
         \* jquery was not in EXT dir - now in folder res/

         \* moved template.js to folder res/

         \* added setup
         'plugin.tt\_news.tx\_jhsocialshareprivacyttnews\_pi1.jquery\_path' to
         change path for jquery

         \* updated manual

         \* changed extension state to stable


 - :Version:
         0.0.10

   :Changes:
         \* fixed bug for setting the default css\_path


 - :Version:
         0.0.9

   :Changes:
         \* set 'plugin.tt\_news.tx\_jhsocialshareprivacyttnews\_pi1.css\_path
         = ' to turn off css of extension (Issue #44698)


 - :Version:
         0.0.8

   :Changes:
         \* link for facebook iframe is now forced to be absolute\* resolved
         some bugs when reading the typoscript setup settings\* if 'plugin.tt\_
         news.tx\_jhsocialshareprivacyttnews\_pi1.socialshareprivacy\_path' is
         empty, the jquery.socialshareprivacy.js won't be includedUse this, if
         the extension 'socialshareprivacy' is used. Otherwise you will have a
         conflict.\* updated manual

         \* set extension-state to beta


 - :Version:
         0.0.7

   :Changes:
         \* resolves a javascript error in file "jquery.socialshareprivacy.js"
         on line 130 (bug #43524)


 - :Version:
         0.0.6

   :Changes:
         \* updated manual

         \* updated socialshareprivacy plugin to version 1.4

         \* added project on forge.typo3.org ( `http://forge.typo3.org/projects
         /extension-jh\_socialshareprivacy\_ttnews
         <http://forge.typo3.org/projects/extension-
         jh_socialshareprivacy_ttnews>`_ )

         \* added extension icon


 - :Version:
         0.0.5

   :Changes:
         \* bugfixes (missing parameter in
         pi1/class.tx\_jhsocialshareprivacyttnews\_pi1.php in line 109)


 - :Version:
         0.0.4

   :Changes:
         \* added documentation


 - :Version:
         0.0.3

   :Changes:
         \* some bugfixes (ext\_typoscript\_setup.txt) was not used\* with
         'plugin.tt\_news.tx\_jhsocialshareprivacyttnews\_pi1.info\_link = off'
         you are now able to hide the information button


 - :Version:
         0.0.2

   :Changes:
         \* corrected some bugs evoked by changed extension key


 - :Version:
         0.0.1

   :Changes:
         \* Initial release.


.. ###### END~OF~TABLE ######


