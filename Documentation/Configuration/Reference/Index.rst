

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


Reference
^^^^^^^^^


TypoScript options – Main settings
""""""""""""""""""""""""""""""""""


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         Property:

   Data type
         Data type:

   Description
         Description:

   Default
         Default:


.. container:: table-row

   Property
         template

   Data type
         string

   Description
         Template file for socialprivacyshare settings.

   Default
   		 EXT:jh_socialshareprivacy_ttnews/Resources/Private/Templates/template.js


.. container:: table-row

   Property
         socialshareprivacy\_path

   Data type
         string

   Description
         Path to the socialprivacyshare javascript file.Leave empty if the
         extension 'socialshareprovacy' is used.

   Default
         EXT:jh_socialshareprivacy_ttnews/Resources/Public/Contrib/socialshareprivacy/jquery.socialshareprivacy.js


.. container:: table-row

   Property
         use\_jquery\_from\_extension

   Data type
         int

   Description
         Set to '1' if jh\_socialshareprivacy\_ttnews should include jquery.

   Default
         0


.. container:: table-row

   Property
         jquery\_path

   Data type
         string

   Description
         Path to jQuery

   Default
         EXT:jh_socialshareprivacy_ttnews/Resources/Public/Javascript/jquery-1.11.2.min.js


.. container:: table-row

   Property
         info\_link

   Data type
         string

   Description
         Link of the -i button.

         Set to 'off' if button should be hidden.

         Not set by default.

   Default
   		\


.. container:: table-row

   Property
         cookie\_expires

   Data type
         integer

   Description
         Sets the livetime of the cookie if permalogin is set to on.

         Not set by default.

   Default
   		\


.. container:: table-row

   Property
         css\_path

   Data type
         string

   Description
         Path to the css file to style the socialprivacyshare bar.

         If empty no css file will be included.

   Default
         EXT:jh_socialshareprivacy_ttnews/Resources/Public/Contrib/socialshareprivacy/socialshareprivacy/socialshareprivacy.css


.. container:: table-row

   Property
         uri

   Data type
         string

   Description
         Static url for socialprivacyshare bar.

         Not usefull in this case, just ignore.

   Default
   		\


.. ###### END~OF~TABLE ######


[tsref:plugin.tt\_news.tx\_jhsocialshareprivacyttnews\_pi1 ]


Example
"""""""

::

	plugin.tt_news.tx_jhsocialshareprivacyttnews_pi1 {
		template = EXT:jh_socialshareprivacy_ttnews/Resources/Private/Templates/template.js
		socialshareprivacy_path = EXT:jh_socialshareprivacy_ttnews/Resources/Public/Contrib/socialshareprivacy/jquery.socialshareprivacy.js

		use_jquery_from_extension = 0
		jquery_path = EXT:jh_socialshareprivacy_ttnews/Resources/Public/Javascript/jquery-1.11.2.min.js

		info_link =
		cookie_expires =
		css_path = EXT:jh_socialshareprivacy_ttnews/Resources/Public/Contrib/socialshareprivacy/socialshareprivacy/socialshareprivacy.css
		uri =
	}


TypoScript options – facebook settings
""""""""""""""""""""""""""""""""""""""

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         Property:

   Data type
         Data type:

   Description
         Description:

   Default
         Default:


.. container:: table-row

   Property
         status

   Data type
         string

   Description
         On: activate facebook in socialprivacyshare bar

         Off: deactivate facebook in socialprivacyshare bar

   Default
         on


.. container:: table-row

   Property
         dummy\_img

   Data type
         string

   Description
         URL to the fake-picture

   Default
         EXT:jh\_socialshareprivacy\_ttnews/Resources/Public/Contrib/socialshareprivacy/socialsharepriva
         cy/images/dummy\_facebook.png


.. container:: table-row

   Property
         perma\_option

   Data type
         string

   Description
         On: activate option to permanently sent data to facebook

         Off: deactivate option to permanently sent data to facebook

   Default
         on


.. container:: table-row

   Property
         display\_name

   Data type
         string

   Description


   Default
         Facebook


.. container:: table-row

   Property
         referrer\_track

   Data type
         string

   Description
         Is added to the end of the URL for tracking, optional

   Default
   		\


.. container:: table-row

   Property
         action

   Data type
         string

   Description
         Recommend: 'empfehlen'

         Like: 'gefällt mir'

   Default
         recommend


.. container:: table-row

   Property
         language

   Data type
         string

   Description


   Default
         de\_DE


.. ###### END~OF~TABLE ######

[tsref:plugin.tt\_news.tx\_jhsocialshareprivacyttnews\_pi1.services.fa
cebook]


Example
"""""""

::

	plugin.tt_news.tx_jhsocialshareprivacyttnews_pi1.services.facebook {
		status=on
		dummy_img = EXT:jh_socialshareprivacy_ttnews/Resources/Public/Contrib/socialshareprivacy/socialshareprivacy/images/dummy_facebook.png
		perma_option=on
		display_name=Facebook
		referrer_track=
		action=recommend
		language=de_DE
	}


TypoScript options – twitter settings
"""""""""""""""""""""""""""""""""""""

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         Property:

   Data type
         Data type:

   Description
         Description:

   Default
         Default:


.. container:: table-row

   Property
         status

   Data type
         string

   Description
         On: activate twitter in socialprivacyshare bar

         Off: deactivate twitter in socialprivacyshare bar

   Default
         on


.. container:: table-row

   Property
         dummy\_img

   Data type
         string

   Description
         URL to the fake-picture

   Default
         EXT:jh\_socialshareprivacy\_ttnews/Resources/Public/Contrib/socialshareprivacy/socialsharepriva
         cy/images/dummy\_twitter.png


.. container:: table-row

   Property
         perma\_option

   Data type
         string

   Description
         On: activate option to permanently sent data to twitter

         Off: deactivate option to permanently sent data to twitter

   Default
         on


.. container:: table-row

   Property
         display\_name

   Data type
         string

   Description


   Default
         Twitter


.. container:: table-row

   Property
         referrer\_track

   Data type
         string

   Description
         Is added to the end of the URL for tracking, optional

   Default
   		\


.. container:: table-row

   Property
         language

   Data type
         string

   Description


   Default
         de\_DE


.. ###### END~OF~TABLE ######

[tsref:plugin.tt\_news.tx\_jhsocialshareprivacyttnews\_pi1.services.tw
itter]


Example
"""""""

::

	plugin.tt_news.tx_jhsocialshareprivacyttnews_pi1.services.facebook {
		status=on
		dummy_img = EXT:jh_socialshareprivacy_ttnews/Resources/Public/Contrib/socialshareprivacy/socialshareprivacy/images/dummy_twitter.png
		perma_option=on
		display_name=Twitter
		referrer_track=
		language=de_DE
	}


TypoScript options – Google+ settings
"""""""""""""""""""""""""""""""""""""

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         Property:

   Data type
         Data type:

   Description
         Description:

   Default
         Default:


.. container:: table-row

   Property
         status

   Data type
         string

   Description
         On: activate google+ in socialprivacyshare bar

         Off: deactivate google+ in socialprivacyshare bar

   Default
         on


.. container:: table-row

   Property
         dummy\_img

   Data type
         string

   Description
         URL to the fake-picture

   Default
         EXT:jh\_socialshareprivacy\_ttnews/Resources/Public/Contrib/socialshareprivacy/socialsharepriva
         cy/images/dummy\_gplus.png


.. container:: table-row

   Property
         perma\_option

   Data type
         string

   Description
         On: activate option to permanently sent data to google+

         Off: deactivate option to permanently sent data to google+

   Default
         on


.. container:: table-row

   Property
         display\_name

   Data type
         string

   Description


   Default
         Google+


.. container:: table-row

   Property
         referrer\_track

   Data type
         string

   Description
         Is added to the end of the URL for tracking, optional

   Default
   		\


.. container:: table-row

   Property
         language

   Data type
         string

   Description


   Default
         de\_DE


.. ###### END~OF~TABLE ######

[tsref:plugin.tt\_news.tx\_jhsocialshareprivacyttnews\_pi1.services.gp
lus]


Example
"""""""

::

	plugin.tt_news.tx_jhsocialshareprivacyttnews_pi1.services.gplus {
		status=on
		dummy_img = EXT:jh_socialshareprivacy_ttnews/Resources/Public/Contrib/socialshareprivacy/socialshareprivacy/images/dummy_gplus.png
		perma_option=on
		display_name=Google+
		referrer_track=
		language=de_DE
	}

