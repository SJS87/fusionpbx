<?php

	//application details
		$apps[$x]['name'] = "Registrations";
		$apps[$x]['uuid'] = "5d9e7cd7-629e-3553-4cf5-f26e39fefa39";
		$apps[$x]['category'] = "Switch";;
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Displays registrations from endpoints.";
		$apps[$x]['description']['es-cl'] = "Muestra los registros desde los extremos";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['de-de'] = "";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-at'] = "";
		$apps[$x]['description']['fr-fr'] = "Afficher les enregistrements des équipements.";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-ch'] = "";
		$apps[$x]['description']['pt-pt'] = "Exibe registos de terminais SIP.";
		$apps[$x]['description']['pt-br'] = "";

	//permission details
		$apps[$x]['permissions'][0]['name'] = "registration_domain";
		$apps[$x]['permissions'][0]['menu']['uuid'] = "17dbfd56-291d-8c1c-bc43-713283a9dd5a";
		$apps[$x]['permissions'][0]['groups'][] = "admin";
		$apps[$x]['permissions'][0]['groups'][] = "superadmin";

		$apps[$x]['permissions'][1]['name'] = "registration_all";
		$apps[$x]['permissions'][1]['menu']['uuid'] = "17dbfd56-291d-8c1c-bc43-713283a9dd5a";
		$apps[$x]['permissions'][1]['groups'][] = "superadmin";

?>