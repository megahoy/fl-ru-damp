<?php

	include('_header.php');

	# http://wiki.webmoney.ru/wiki/show/Interfeys_X11
	$res = $wmxi->X11(
		ANOTHER_WMID,  # WM-РёРґРµРЅС‚РёС„РёРєР°С‚РѕСЂ Р°С‚С‚РµСЃС‚Р°С‚Р°
		0,             # РѕС‚РѕР±СЂР°Р¶РµРЅРёРµ вЂњРѕРїРѕСЂРЅРѕРіРѕ СЃР»РѕРІР°СЂСЏвЂќ
		0,             # РѕС‚РѕР±СЂР°Р¶РµРЅРёРµ РїРµСЂСЃРѕРЅР°Р»СЊРЅС‹С… РґР°РЅРЅС‹С…(РїР°СЃРїРѕСЂС‚РЅС‹Рµ РґР°РЅРЅС‹Рµ+РєРѕРЅС‚Р°РєС‚РЅР°СЏ РёРЅС„РѕСЂРјР°С†РёСЏ) РІР»Р°РґРµР»СЊС†Р° Р°С‚С‚РµСЃС‚Р°С‚Р°
		0              # РїСЂРѕРІРµСЂРєР° РїСЂРёРЅР°РґР»РµР¶РЅРѕСЃС‚Рё WM-РёРґРµРЅС‚РёС„РёРєР°С‚РѕСЂР°, РїРѕРґРїРёСЃР°РІС€РµРіРѕ Р·Р°РїСЂРѕСЃ, СЃРїРёСЃРєСѓ РґРѕРІРµСЂРµРЅРЅС‹С… РёРґРµРЅС‚РёС„РёРєР°С‚РѕСЂРѕРІ РґР»СЏ РїСЂРѕРІРµСЂСЏРµРјРѕРіРѕ Р°С‚С‚РµСЃС‚Р°С‚Р°
	);

	print_r($res->toObject());


?>