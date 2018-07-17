<?php
	defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
	defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'xampp'.DS.'htdocs'.DS.'management');
	defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

	$list = [
		'config',
		'functions',
		'database',
		'session',
		'database_object',
		'investors',
		'investors_address',
		
		'bank',
		'manager_bank_accounts',
		'investors_bank_acounts',
		'suppliers_category',
		'supplier_contract',
		'properties',
		
		'expenses',
		'expense_accounting',
		'expense_categories',
		'company',
		'company_investors',
		
		'payments',
		'payments_expence',
		'property_units',
		'tenants',
		'tenants_contract',
		'tenants_rent_request',
		'tenant_payments_request',
		"tenants_emails",
		"tenants_numbers",
		"tenants_identification_type",
		
		'investors_emails',
		'investor_contact_numbers',
		'investors_payment_period',
		'user',

	];

	foreach ($list as $key) {
		require_once(LIB_PATH.DS.$key.'.php');
	}
?>