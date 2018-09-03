<?php $lang = (isset($_GET['lang']))? $_GET['lang'] : ""; $website_version = (file_exists("../config.ini"))?(parse_ini_file("../config.ini")["website_version"]):"4"; ?><?php if($lang == "fr" ){?><x><rs n="help" c="title"><r><c n="title"><![CDATA[Besoin d'aide ?]]></c></r></rs><rs n="content" c="c"><r><c n="c"><![CDATA[Si vous amenez le pointeur sur les objets, certains se transformeront en portoloins qui vous transporteront vers d'autres parties du site.De temps à autre, vous découvrirez la Marque des Ténèbres.Elle annonce des informations qui risquent de vous GÂCHER le plaisir de la découverte de « Harry Potter et le Prince de Sang-Mêlé ».]]></c></r></rs></x><?php } elseif($lang == "es" ){?><x><rs n="help" c="title"><r><c n="title"><![CDATA[¿ayuda?]]></c></r></rs><rs n="content" c="c"><r><c n="c"><![CDATA[Al pasar el cursor sobre los objetos, algunos de ellos se convertirán en trasladores que te llevarán a otras áreas del sitio.De vez en cuando descubrirás una Marca diabólica.Se refiere a datos relacionados con "Harry Potter y el príncipe mestizo", por lo que puede echar a perder la intriga.]]></c></r></rs></x><?php } elseif($lang == "de" ){?><x><rs n="help" c="title"><r><c n="title"><![CDATA[Hilfe?]]></c></r></rs><rs n="content" c="c"><r><c n="c"><![CDATA[Wenn du den Mauszeiger über die Objekte bewegst, verwandeln sich manche in Portschlüssel, die dich zu anderen Bereichen der Site transportieren.Gelegentlich wirst du auf das Dunkle Mal stoßen.Das ist eine SPOILER-WARNUNG für Informationen, die in „Harry Potter und der Halbblutprinz“ enthalten sind.]]></c></r></rs></x><?php } elseif($lang == "it" ){?><x><rs n="help" c="title"><r><c n="title"><![CDATA[Guida?]]></c></r></rs><rs n="content" c="c"><r><c n="c"><![CDATA[Muovendo il cursore sugli oggetti, alcuni si trasformeranno in Passaporte che ti trasporteranno in altre aree del sito.Ogni tanto scoprirai un Marchio Nero.È un AVVERTIMENTO; riguarda informazioni contenute in “Harry Potter e il Principe Mezzosangue”.]]></c></r></rs></x><?php } elseif($lang == "ja" ){?><x><rs n="help" c="title"><r><c n="title"><![CDATA[ヘルプ]]></c></r></rs><rs n="content" c="c"><r><c n="c"><![CDATA[カーソルを品物の上に動かしてみてください。それが移動キーなら、このサイトの別の場所に移動できます。場合によっては闇の印が出現します。これは「ネタばれ注意」の印です。『ハリー・ポッターと謎のプリンス』についての情報が含まれています。]]></c></r></rs></x><?php } else {?>	<?php if($website_version < 2 ){?><x><rs n="help" c="title"><r><c n="title"><![CDATA[help?]]></c></r></rs><rs n="content" c="c"><r><c n="c"><![CDATA[As you move your cursor over the objects, some will turn into Portkeys that will transport you to other areas of the site.  Watch out for the Dark Mark below, which is a spoiler warning.]]></c></r></rs></x>	<?php } elseif($website_version == 2 ){?><x><rs n="help" c="title"><r><c n="title"><![CDATA[help?]]></c></r></rs><rs n="content" c="c"><r><c n="c"><![CDATA[As you move your cursor over the objects, some will turn into Portkeys that will transport you to other areas of the site.Occasionally the Dark Mark will flash at you. This is a SPOILER WARNING. It refers only to information hidden in book five, The Order of the Phoenix - if you haven't yet finished reading the other four, proceed at your peril!]]></c></r></rs></x>	<?php } else {?><x><rs n="help" c="title"><r><c n="title"><![CDATA[help?]]></c></r></rs><rs n="content" c="c"><r><c n="c"><![CDATA[As you move your cursor over the objects, some will turn into Portkeys that will transport you to other areas of the site.Every so often, you will discover a Dark Mark.This is a SPOILER WARNING and relates to information contained in 'Harry Potter and the Half-Blood Prince.]]></c></r></rs></x>	<?php } ?><?php } ?>