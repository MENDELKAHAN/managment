-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 01:08 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts payable`
--

CREATE TABLE `accounts payable` (
  `accounts payable_id` int(11) NOT NULL,
  `accounts payable_amount` int(11) NOT NULL,
  `accounts payable_date` date NOT NULL,
  `accounts payable_bill_due_date` date NOT NULL,
  `accounts payable_note` text NOT NULL,
  `fk_expenses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `banks_id` int(11) NOT NULL,
  `bank_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `bank_accounts_id` int(11) NOT NULL,
  `bank_accounts_name` varchar(30) NOT NULL,
  `bank_accounts_number` int(13) NOT NULL,
  `bank_account` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_legal_name` varchar(30) NOT NULL,
  `company_number` int(8) NOT NULL,
  `company_vat_number` int(11) NOT NULL,
  `company_address_number` varchar(30) NOT NULL,
  `company_address_line_1` varchar(30) NOT NULL,
  `company_address_line_2` varchar(30) NOT NULL,
  `company_address_town` varchar(30) NOT NULL,
  `company_address_postcode` varchar(10) NOT NULL,
  `company_address_country` varchar(30) NOT NULL,
  `company_add_commission` int(11) DEFAULT NULL,
  `company_layout_without_consent` double(5,2) DEFAULT NULL,
  `company_foreign` int(11) NOT NULL,
  `company_financial_year` date NOT NULL,
  `fk_company_payment_period_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_legal_name`, `company_number`, `company_vat_number`, `company_address_number`, `company_address_line_1`, `company_address_line_2`, `company_address_town`, `company_address_postcode`, `company_address_country`, `company_add_commission`, `company_layout_without_consent`, `company_foreign`, `company_financial_year`, `fk_company_payment_period_id`) VALUES
(3, '1', 1, 1, '1', '1', '1', '1', '1', '1', 1, 1.00, 0, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_investors`
--

CREATE TABLE `company_investors` (
  `fk_company_id` int(11) NOT NULL,
  `fk_investors_id` int(11) NOT NULL,
  `company_investors_percentage` int(11) DEFAULT NULL,
  `company_investors_deduct_mortgage` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_investors`
--

INSERT INTO `company_investors` (`fk_company_id`, `fk_investors_id`, `company_investors_percentage`, `company_investors_deduct_mortgage`) VALUES
(3, 269, 30, 1),
(3, 271, 70, 1);

-- --------------------------------------------------------

--
-- Table structure for table `credit_cards`
--

CREATE TABLE `credit_cards` (
  `credit_cards_id` int(11) NOT NULL,
  `credit_cards_name` int(50) NOT NULL,
  `credit_cards_number` int(16) NOT NULL,
  `credit_cards_name_on_card` varchar(30) NOT NULL,
  `credit_cards_exp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expenses_id` int(11) NOT NULL,
  `fk_supplier_id` int(11) NOT NULL,
  `expences_amount` double(5,2) NOT NULL,
  `fk_properties_id` int(11) DEFAULT NULL,
  `fk_unit_id` int(11) DEFAULT NULL,
  `fk_company_id` int(11) DEFAULT NULL,
  `fk_expense_categories_id` int(11) NOT NULL,
  `expenses_description` text NOT NULL,
  `fk_period_id` int(11) DEFAULT NULL,
  `expenses_date` date DEFAULT NULL,
  `expenses_latest_payment_date` date NOT NULL,
  `charge_company_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='this tabel get the expences with the piodod they belong to ';

-- --------------------------------------------------------

--
-- Table structure for table `expenses_company`
--

CREATE TABLE `expenses_company` (
  `expenses_company_id` int(11) NOT NULL,
  `fk_expenses_id` int(11) DEFAULT NULL,
  `fk_company_id` int(11) DEFAULT NULL,
  `charge_company_amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expense_accounting`
--

CREATE TABLE `expense_accounting` (
  `expense_accounting_id` int(11) NOT NULL,
  `expense_accounting_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expense_categories`
--

CREATE TABLE `expense_categories` (
  `expense_categories_id` int(11) NOT NULL,
  `expense_categories_name` varchar(40) NOT NULL,
  `fk_expense_accounting_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `investors_id` int(11) NOT NULL,
  `investors_company_name` varchar(50) NOT NULL,
  `investor_title` varchar(9) NOT NULL,
  `investors_fname` varchar(30) NOT NULL,
  `investors_lname` varchar(30) NOT NULL,
  `investors_foreign` tinyint(1) NOT NULL,
  `investors_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investors`
--

INSERT INTO `investors` (`investors_id`, `investors_company_name`, `investor_title`, `investors_fname`, `investors_lname`, `investors_foreign`, `investors_active`) VALUES
(268, 'Barron', 'Mr', 'Mendel', 'Kahan', 1, 1),
(269, '1', '1', '1', '1', 0, 1),
(270, '1', '1', '1', '1', 0, 1),
(271, '1', '1', '1', '1', 0, 1),
(272, '1', '1', '1', '1', 0, 1),
(273, '1', '1', '1', '1', 0, 1),
(274, '', '', '', '', 0, 1),
(275, '', '', '', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `investors_addresses`
--

CREATE TABLE `investors_addresses` (
  `investors_addresses_id` int(11) NOT NULL,
  `investors_addresses_number` varchar(10) NOT NULL,
  `investors_addresses_street_1` varchar(60) NOT NULL,
  `investors_addresses_street_2` varchar(60) NOT NULL,
  `investors_addresses_town` varchar(20) NOT NULL,
  `investors_addresses_postcode` varchar(20) NOT NULL,
  `investors_addresses_country` varchar(25) NOT NULL,
  `fk_investors_id` int(11) NOT NULL,
  `investors_addresses_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `investors_bank`
--

CREATE TABLE `investors_bank` (
  `investors_bank_id` int(11) NOT NULL,
  `investors_bank_name` varchar(30) NOT NULL,
  `investors_bank_number` int(13) NOT NULL,
  `investors_bank_sortcode` int(6) NOT NULL,
  `fk_investor_id` int(11) NOT NULL,
  `investors_bank_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `investors_contact_numbers`
--

CREATE TABLE `investors_contact_numbers` (
  `investors_contact_numbers_id` int(11) NOT NULL,
  `investors_contact_numbers_number` varchar(60) NOT NULL,
  `investors_contact_numbers_description` text NOT NULL,
  `investors_contact_numbers_active` int(11) NOT NULL,
  `fk_investors_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investors_contact_numbers`
--

INSERT INTO `investors_contact_numbers` (`investors_contact_numbers_id`, `investors_contact_numbers_number`, `investors_contact_numbers_description`, `investors_contact_numbers_active`, `fk_investors_id`) VALUES
(183, '0', '', 1, 268),
(184, '1', '', 1, 269),
(185, '1', '', 1, 270),
(186, '1', '', 1, 271),
(187, '1', '', 1, 272),
(188, '1', '', 1, 273),
(189, '', '', 1, 274),
(190, '', '', 1, 275);

-- --------------------------------------------------------

--
-- Table structure for table `investors_emails`
--

CREATE TABLE `investors_emails` (
  `investors_emails_id` int(11) NOT NULL,
  `investors_emails_email` varchar(60) NOT NULL,
  `investors_emails_description` text NOT NULL,
  `investors_emails_active` tinyint(4) NOT NULL,
  `fk_investors_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investors_emails`
--

INSERT INTO `investors_emails` (`investors_emails_id`, `investors_emails_email`, `investors_emails_description`, `investors_emails_active`, `fk_investors_id`) VALUES
(189, 'mendy@', '', 1, 268),
(190, 'mendy@', '', 1, 269),
(191, 'mendy@', '', 1, 270),
(192, 'mendy@', '', 1, 271),
(193, 'mendy@', '', 1, 272),
(194, '1', '', 1, 273),
(195, '', '', 1, 274),
(196, '', '', 1, 275);

-- --------------------------------------------------------

--
-- Table structure for table `investors_payment_period`
--

CREATE TABLE `investors_payment_period` (
  `investors_payment_period_id` int(11) NOT NULL,
  `investors_payment_period_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payments_id` int(11) NOT NULL,
  `fk_bank_accounts_id` int(11) NOT NULL,
  `payments_amount` double(6,2) NOT NULL,
  `payments_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments_expenses`
--

CREATE TABLE `payments_expenses` (
  `fk_payments_id` int(11) NOT NULL,
  `fk_expenses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `periods`
--

CREATE TABLE `periods` (
  `periods_id` int(11) NOT NULL,
  `periods_date_created` date NOT NULL,
  `periods_date_closed` date DEFAULT NULL,
  `periods_active` tinyint(4) NOT NULL DEFAULT '1',
  `fk_company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periods`
--

INSERT INTO `periods` (`periods_id`, `periods_date_created`, `periods_date_closed`, `periods_active`, `fk_company_id`) VALUES
(4, '2018-07-10', NULL, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `properties_id` int(11) NOT NULL,
  `properties_house_number` varchar(15) NOT NULL,
  `properties_street_1` varchar(120) NOT NULL,
  `properties_street_2` varchar(120) DEFAULT NULL,
  `properties_town` varchar(20) NOT NULL,
  `properties_postcode` varchar(10) NOT NULL,
  `properties_country` varchar(20) NOT NULL,
  `properties_vat` tinyint(1) NOT NULL DEFAULT '0',
  `fk_company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`properties_id`, `properties_house_number`, `properties_street_1`, `properties_street_2`, `properties_town`, `properties_postcode`, `properties_country`, `properties_vat`, `fk_company_id`) VALUES
(3, '9', 'paget raod', NULL, 'Lonfon', 'N16 5HQ', 'Uk', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `property_units`
--

CREATE TABLE `property_units` (
  `property_units_id` int(11) NOT NULL,
  `property_units_name` varchar(35) NOT NULL,
  `fk_property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_units`
--

INSERT INTO `property_units` (`property_units_id`, `property_units_name`, `fk_property_id`) VALUES
(7, 'flat 1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `rent_paid_by`
--

CREATE TABLE `rent_paid_by` (
  `rent_paid_by_id` int(11) NOT NULL,
  `rent_paid_by_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent_paid_by`
--

INSERT INTO `rent_paid_by` (`rent_paid_by_id`, `rent_paid_by_name`) VALUES
(2, 'renter');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `suppliers_id` int(11) NOT NULL,
  `suppliers_company_name` varchar(50) NOT NULL,
  `suppliers_title` varchar(30) NOT NULL,
  `suppliers_fname` varchar(30) NOT NULL,
  `suppliers_lname` varchar(30) NOT NULL,
  `suppliers_email` varchar(50) NOT NULL,
  `suppliers_contact_number_main` varchar(25) NOT NULL,
  `suppliers_contact_number_second` varchar(25) NOT NULL,
  `suppliers_address_number` varchar(10) NOT NULL,
  `suppliers_address_street_1` varchar(60) NOT NULL,
  `suppliers_address_street_2` varchar(60) NOT NULL,
  `suppliers_address_town` varchar(20) NOT NULL,
  `suppliers_address_postcode` varchar(20) NOT NULL,
  `suppliers_address_country` varchar(25) NOT NULL,
  `suppliers_active` tinyint(1) NOT NULL DEFAULT '1',
  `fk_suppliers_category` int(11) NOT NULL,
  `suppliers_bank_acount` varchar(30) NOT NULL,
  `suppliers_bank_number` int(13) NOT NULL,
  `suppliers_bank_sortcode` int(6) NOT NULL,
  `suppliers_bank_ref` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers_contract`
--

CREATE TABLE `suppliers_contract` (
  `suppliers_contract_id` int(11) NOT NULL,
  `suppliers_contract_start_date` date NOT NULL,
  `suppliers_contract_end_date` date DEFAULT NULL,
  `suppliers_contract_price_per_month` double NOT NULL,
  `fk_suppliers_id` int(11) NOT NULL,
  `suppliers_contract_active` tinyint(1) NOT NULL DEFAULT '1',
  `fk_company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_category`
--

CREATE TABLE `supplier_category` (
  `supplier_category_id` int(11) NOT NULL,
  `supplier_category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `tenants_id` int(11) NOT NULL,
  `tenants_title` varchar(10) NOT NULL,
  `tenants_fname` varchar(30) NOT NULL,
  `tenants_lname` varchar(30) NOT NULL,
  `tenants_date_of_birth` date NOT NULL,
  `fk_tenants_identification_type` int(11) NOT NULL,
  `tenants_identification_number` varchar(30) NOT NULL,
  `tenants_pay_in_arrears` tinyint(1) NOT NULL DEFAULT '0',
  `tenants_active` tinyint(1) NOT NULL DEFAULT '1',
  `fk_unit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`tenants_id`, `tenants_title`, `tenants_fname`, `tenants_lname`, `tenants_date_of_birth`, `fk_tenants_identification_type`, `tenants_identification_number`, `tenants_pay_in_arrears`, `tenants_active`, `fk_unit_id`) VALUES
(4, 'Mr', 'sam', 'kahan', '2018-07-03', 3, '1234456879', 0, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tenants_emails`
--

CREATE TABLE `tenants_emails` (
  `tenants_emails_id` int(11) NOT NULL,
  `tenants_emails_email` varchar(75) NOT NULL,
  `tenants_emails_note` text NOT NULL,
  `tenants_emails_active` tinyint(1) NOT NULL DEFAULT '1',
  `fk_tenants_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tenants_identification_type`
--

CREATE TABLE `tenants_identification_type` (
  `fk_tenants_identification_type_id` int(11) NOT NULL,
  `tenants_identification_type_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenants_identification_type`
--

INSERT INTO `tenants_identification_type` (`fk_tenants_identification_type_id`, `tenants_identification_type_name`) VALUES
(3, 'passport');

-- --------------------------------------------------------

--
-- Table structure for table `tenants_numbers`
--

CREATE TABLE `tenants_numbers` (
  `tenants_numbers_id` int(11) NOT NULL,
  `tenants_numbers_number` varchar(75) NOT NULL,
  `tenants_numbers_note` text NOT NULL,
  `tenants_numbers_active` tinyint(1) NOT NULL DEFAULT '1',
  `fk_tenants_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tenant_contracts`
--

CREATE TABLE `tenant_contracts` (
  `tenant_contracts_id` int(11) NOT NULL,
  `fk_tenant_contracts_type` int(11) NOT NULL,
  `tenant_contracts_start_date` date NOT NULL,
  `tenant_contracts_end_date` date DEFAULT NULL,
  `fk_tenant_contracts_frequency_of_payment_id` int(11) NOT NULL,
  `fk_rent_paid_by_id` int(11) NOT NULL,
  `tenant_contracts_pets` tinyint(1) NOT NULL,
  `tenant_contracts_amount` double(5,2) NOT NULL,
  `tenant_contracts_active` int(11) NOT NULL,
  `tenant_contracts_total_adults` int(11) NOT NULL,
  `tenant_contracts_total_children` int(11) NOT NULL,
  `fk_tenant_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant_contracts`
--

INSERT INTO `tenant_contracts` (`tenant_contracts_id`, `fk_tenant_contracts_type`, `tenant_contracts_start_date`, `tenant_contracts_end_date`, `fk_tenant_contracts_frequency_of_payment_id`, `fk_rent_paid_by_id`, `tenant_contracts_pets`, `tenant_contracts_amount`, `tenant_contracts_active`, `tenant_contracts_total_adults`, `tenant_contracts_total_children`, `fk_tenant_id`) VALUES
(3, 2, '2018-07-09', '0000-00-00', 1, 2, 0, 600.00, 1, 2, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tenant_contracts_frequency_of_payment`
--

CREATE TABLE `tenant_contracts_frequency_of_payment` (
  `tenant_contracts_frequency_of_payment_id` int(11) NOT NULL,
  `tenant_contracts_frequency_of_payment_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant_contracts_frequency_of_payment`
--

INSERT INTO `tenant_contracts_frequency_of_payment` (`tenant_contracts_frequency_of_payment_id`, `tenant_contracts_frequency_of_payment_name`) VALUES
(1, 'monthly');

-- --------------------------------------------------------

--
-- Table structure for table `tenant_contract_type`
--

CREATE TABLE `tenant_contract_type` (
  `tenant_contract_type_id` int(11) NOT NULL,
  `tenant_contract_type_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant_contract_type`
--

INSERT INTO `tenant_contract_type` (`tenant_contract_type_id`, `tenant_contract_type_name`) VALUES
(2, 'rent'),
(3, 'maintenance ');

-- --------------------------------------------------------

--
-- Table structure for table `tenant_payments_received`
--

CREATE TABLE `tenant_payments_received` (
  `tenant_payments_received_id` int(11) NOT NULL,
  `tenant_payments_received_amount` double NOT NULL,
  `tenant_payments_received_date` date NOT NULL,
  `fk_contract_id` int(11) NOT NULL,
  `fk_periods_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant_payments_received`
--

INSERT INTO `tenant_payments_received` (`tenant_payments_received_id`, `tenant_payments_received_amount`, `tenant_payments_received_date`, `fk_contract_id`, `fk_periods_id`) VALUES
(5, 600, '2018-07-10', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tenant_payments_request`
--

CREATE TABLE `tenant_payments_request` (
  `tenant_payments_request_id` int(11) NOT NULL,
  `tenant_payments_request_amount` double NOT NULL,
  `tenant_payments_request_required_date` date NOT NULL,
  `fk_contract_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_fname` varchar(30) NOT NULL,
  `users_sname` varchar(30) NOT NULL,
  `users_name` varchar(50) NOT NULL,
  `users_password` varchar(70) NOT NULL,
  `users_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_fname`, `users_sname`, `users_name`, `users_password`, `users_group`) VALUES
(8, 'mendy', 'kahan', 'mendy', '$2y$10$ZSC.Yvgts84MrGj2.N.AKuqNa9oqcCsGhLAIBSzU6/aK4QCqGU0Mq', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts payable`
--
ALTER TABLE `accounts payable`
  ADD PRIMARY KEY (`accounts payable_id`),
  ADD UNIQUE KEY `accounts payable_id` (`accounts payable_id`);

--
-- Indexes for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`bank_accounts_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `company_investors`
--
ALTER TABLE `company_investors`
  ADD PRIMARY KEY (`fk_investors_id`,`fk_company_id`),
  ADD KEY `fk_company_id` (`fk_company_id`);

--
-- Indexes for table `credit_cards`
--
ALTER TABLE `credit_cards`
  ADD PRIMARY KEY (`credit_cards_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expenses_id`),
  ADD KEY `fk_supplier_id` (`fk_supplier_id`),
  ADD KEY `fk_properties_id` (`fk_properties_id`),
  ADD KEY `fk_expense_categories_id` (`fk_expense_categories_id`),
  ADD KEY `fk_period_id` (`fk_period_id`);

--
-- Indexes for table `expenses_company`
--
ALTER TABLE `expenses_company`
  ADD PRIMARY KEY (`expenses_company_id`),
  ADD KEY `expenses_company_company_idx` (`fk_company_id`),
  ADD KEY `expenses_company_expence_idx` (`fk_expenses_id`);

--
-- Indexes for table `expense_accounting`
--
ALTER TABLE `expense_accounting`
  ADD PRIMARY KEY (`expense_accounting_id`),
  ADD UNIQUE KEY `fk_expense_accounting_id` (`expense_accounting_id`),
  ADD KEY `expense_accounting_id` (`expense_accounting_id`),
  ADD KEY `expense_accounting_id_2` (`expense_accounting_id`);

--
-- Indexes for table `expense_categories`
--
ALTER TABLE `expense_categories`
  ADD PRIMARY KEY (`expense_categories_id`),
  ADD UNIQUE KEY `expense_categories_id` (`expense_categories_id`),
  ADD KEY `fk_expense_accounting_id` (`fk_expense_accounting_id`);

--
-- Indexes for table `investors`
--
ALTER TABLE `investors`
  ADD PRIMARY KEY (`investors_id`);

--
-- Indexes for table `investors_addresses`
--
ALTER TABLE `investors_addresses`
  ADD PRIMARY KEY (`investors_addresses_id`),
  ADD KEY `fk_investors_id_idx` (`fk_investors_id`);

--
-- Indexes for table `investors_bank`
--
ALTER TABLE `investors_bank`
  ADD PRIMARY KEY (`investors_bank_id`);

--
-- Indexes for table `investors_contact_numbers`
--
ALTER TABLE `investors_contact_numbers`
  ADD PRIMARY KEY (`investors_contact_numbers_id`),
  ADD KEY `fk_investor)id_idx` (`fk_investors_id`);

--
-- Indexes for table `investors_emails`
--
ALTER TABLE `investors_emails`
  ADD PRIMARY KEY (`investors_emails_id`),
  ADD KEY `fk_investor)id_idx` (`fk_investors_id`);

--
-- Indexes for table `investors_payment_period`
--
ALTER TABLE `investors_payment_period`
  ADD PRIMARY KEY (`investors_payment_period_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payments_id`);

--
-- Indexes for table `payments_expenses`
--
ALTER TABLE `payments_expenses`
  ADD KEY `fk_expenses_id` (`fk_expenses_id`),
  ADD KEY `fk_payments_id` (`fk_payments_id`);

--
-- Indexes for table `periods`
--
ALTER TABLE `periods`
  ADD PRIMARY KEY (`periods_id`),
  ADD KEY `fk_company_id` (`fk_company_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`properties_id`),
  ADD KEY `fk_property_landlord_id` (`fk_company_id`);

--
-- Indexes for table `property_units`
--
ALTER TABLE `property_units`
  ADD PRIMARY KEY (`property_units_id`),
  ADD UNIQUE KEY `unique_index` (`property_units_name`,`fk_property_id`),
  ADD KEY `fk_property_id` (`fk_property_id`);

--
-- Indexes for table `rent_paid_by`
--
ALTER TABLE `rent_paid_by`
  ADD PRIMARY KEY (`rent_paid_by_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`suppliers_id`),
  ADD KEY `fk_suppliers_category` (`fk_suppliers_category`);

--
-- Indexes for table `suppliers_contract`
--
ALTER TABLE `suppliers_contract`
  ADD PRIMARY KEY (`suppliers_contract_id`),
  ADD KEY `fk_suppliers_id` (`fk_suppliers_id`);

--
-- Indexes for table `supplier_category`
--
ALTER TABLE `supplier_category`
  ADD PRIMARY KEY (`supplier_category_id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`tenants_id`),
  ADD KEY `fk_unit_id` (`fk_unit_id`),
  ADD KEY `fk_tenants_identification_type` (`fk_tenants_identification_type`);

--
-- Indexes for table `tenants_emails`
--
ALTER TABLE `tenants_emails`
  ADD PRIMARY KEY (`tenants_emails_id`),
  ADD KEY `fk_tenants_id` (`fk_tenants_id`);

--
-- Indexes for table `tenants_identification_type`
--
ALTER TABLE `tenants_identification_type`
  ADD PRIMARY KEY (`fk_tenants_identification_type_id`);

--
-- Indexes for table `tenants_numbers`
--
ALTER TABLE `tenants_numbers`
  ADD PRIMARY KEY (`tenants_numbers_id`),
  ADD KEY `fk_tenants_id` (`fk_tenants_id`);

--
-- Indexes for table `tenant_contracts`
--
ALTER TABLE `tenant_contracts`
  ADD PRIMARY KEY (`tenant_contracts_id`),
  ADD KEY `fk_tenant_id` (`fk_tenant_id`),
  ADD KEY `fk_tenant_contracts_frequency_of_payment_id` (`fk_tenant_contracts_frequency_of_payment_id`),
  ADD KEY `fk_rent_paid_by_id` (`fk_rent_paid_by_id`),
  ADD KEY `fk_tenant_contracts_type` (`fk_tenant_contracts_type`);

--
-- Indexes for table `tenant_contracts_frequency_of_payment`
--
ALTER TABLE `tenant_contracts_frequency_of_payment`
  ADD PRIMARY KEY (`tenant_contracts_frequency_of_payment_id`),
  ADD UNIQUE KEY `tenant_contracts_frequency_of_payment_id` (`tenant_contracts_frequency_of_payment_id`);

--
-- Indexes for table `tenant_contract_type`
--
ALTER TABLE `tenant_contract_type`
  ADD PRIMARY KEY (`tenant_contract_type_id`);

--
-- Indexes for table `tenant_payments_received`
--
ALTER TABLE `tenant_payments_received`
  ADD PRIMARY KEY (`tenant_payments_received_id`),
  ADD KEY `tenant_payments_request_ibfk_1_idx` (`fk_contract_id`),
  ADD KEY `fk_periods_id` (`fk_periods_id`);

--
-- Indexes for table `tenant_payments_request`
--
ALTER TABLE `tenant_payments_request`
  ADD PRIMARY KEY (`tenant_payments_request_id`),
  ADD KEY `fk_tenant_id` (`fk_contract_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts payable`
--
ALTER TABLE `accounts payable`
  MODIFY `accounts payable_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `bank_accounts_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `credit_cards`
--
ALTER TABLE `credit_cards`
  MODIFY `credit_cards_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expenses_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `expenses_company`
--
ALTER TABLE `expenses_company`
  MODIFY `expenses_company_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `expense_accounting`
--
ALTER TABLE `expense_accounting`
  MODIFY `expense_accounting_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `expense_categories`
--
ALTER TABLE `expense_categories`
  MODIFY `expense_categories_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `investors`
--
ALTER TABLE `investors`
  MODIFY `investors_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;
--
-- AUTO_INCREMENT for table `investors_addresses`
--
ALTER TABLE `investors_addresses`
  MODIFY `investors_addresses_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `investors_bank`
--
ALTER TABLE `investors_bank`
  MODIFY `investors_bank_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `investors_contact_numbers`
--
ALTER TABLE `investors_contact_numbers`
  MODIFY `investors_contact_numbers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;
--
-- AUTO_INCREMENT for table `investors_emails`
--
ALTER TABLE `investors_emails`
  MODIFY `investors_emails_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payments_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `periods`
--
ALTER TABLE `periods`
  MODIFY `periods_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `properties_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `property_units`
--
ALTER TABLE `property_units`
  MODIFY `property_units_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rent_paid_by`
--
ALTER TABLE `rent_paid_by`
  MODIFY `rent_paid_by_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `suppliers_contract`
--
ALTER TABLE `suppliers_contract`
  MODIFY `suppliers_contract_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `tenants_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tenants_emails`
--
ALTER TABLE `tenants_emails`
  MODIFY `tenants_emails_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tenants_identification_type`
--
ALTER TABLE `tenants_identification_type`
  MODIFY `fk_tenants_identification_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tenants_numbers`
--
ALTER TABLE `tenants_numbers`
  MODIFY `tenants_numbers_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tenant_contracts`
--
ALTER TABLE `tenant_contracts`
  MODIFY `tenant_contracts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tenant_contract_type`
--
ALTER TABLE `tenant_contract_type`
  MODIFY `tenant_contract_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tenant_payments_received`
--
ALTER TABLE `tenant_payments_received`
  MODIFY `tenant_payments_received_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tenant_payments_request`
--
ALTER TABLE `tenant_payments_request`
  MODIFY `tenant_payments_request_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_investors`
--
ALTER TABLE `company_investors`
  ADD CONSTRAINT `company_investors_ibfk_1` FOREIGN KEY (`fk_company_id`) REFERENCES `company` (`company_id`),
  ADD CONSTRAINT `fk_investors_id` FOREIGN KEY (`fk_investors_id`) REFERENCES `investors` (`investors_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_ibfk_3` FOREIGN KEY (`fk_supplier_id`) REFERENCES `suppliers` (`suppliers_id`),
  ADD CONSTRAINT `expenses_ibfk_4` FOREIGN KEY (`fk_period_id`) REFERENCES `periods` (`periods_id`);

--
-- Constraints for table `expenses_company`
--
ALTER TABLE `expenses_company`
  ADD CONSTRAINT `expenses_company_company` FOREIGN KEY (`fk_company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `expenses_company_expence` FOREIGN KEY (`fk_expenses_id`) REFERENCES `expenses` (`expenses_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `investors_addresses`
--
ALTER TABLE `investors_addresses`
  ADD CONSTRAINT `investors_addresses_ibfk_1` FOREIGN KEY (`fk_investors_id`) REFERENCES `investors` (`investors_id`);

--
-- Constraints for table `investors_contact_numbers`
--
ALTER TABLE `investors_contact_numbers`
  ADD CONSTRAINT `investors_contact_numbers_ibfk_1` FOREIGN KEY (`fk_investors_id`) REFERENCES `investors` (`investors_id`);

--
-- Constraints for table `investors_emails`
--
ALTER TABLE `investors_emails`
  ADD CONSTRAINT `fk_investor)id` FOREIGN KEY (`fk_investors_id`) REFERENCES `investors` (`investors_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payments_expenses`
--
ALTER TABLE `payments_expenses`
  ADD CONSTRAINT `payments_expenses_ibfk_3` FOREIGN KEY (`fk_expenses_id`) REFERENCES `expenses` (`expenses_id`),
  ADD CONSTRAINT `payments_expenses_ibfk_4` FOREIGN KEY (`fk_payments_id`) REFERENCES `payments` (`payments_id`);

--
-- Constraints for table `periods`
--
ALTER TABLE `periods`
  ADD CONSTRAINT `periods_ibfk_1` FOREIGN KEY (`fk_company_id`) REFERENCES `company` (`company_id`);

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_ibfk_1` FOREIGN KEY (`fk_company_id`) REFERENCES `company` (`company_id`);

--
-- Constraints for table `property_units`
--
ALTER TABLE `property_units`
  ADD CONSTRAINT `property_units_ibfk_1` FOREIGN KEY (`fk_property_id`) REFERENCES `properties` (`properties_id`);

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `suppliers_ibfk_1` FOREIGN KEY (`fk_suppliers_category`) REFERENCES `supplier_category` (`supplier_category_id`);

--
-- Constraints for table `suppliers_contract`
--
ALTER TABLE `suppliers_contract`
  ADD CONSTRAINT `suppliers_contract_ibfk_1` FOREIGN KEY (`fk_suppliers_id`) REFERENCES `suppliers` (`suppliers_id`);

--
-- Constraints for table `supplier_category`
--
ALTER TABLE `supplier_category`
  ADD CONSTRAINT `supplier_category_ibfk_1` FOREIGN KEY (`supplier_category_id`) REFERENCES `expense_categories` (`fk_expense_accounting_id`);

--
-- Constraints for table `tenants`
--
ALTER TABLE `tenants`
  ADD CONSTRAINT `tenants_ibfk_2` FOREIGN KEY (`fk_tenants_identification_type`) REFERENCES `tenants_identification_type` (`fk_tenants_identification_type_id`),
  ADD CONSTRAINT `tenants_ibfk_3` FOREIGN KEY (`fk_unit_id`) REFERENCES `property_units` (`property_units_id`);

--
-- Constraints for table `tenants_emails`
--
ALTER TABLE `tenants_emails`
  ADD CONSTRAINT `tenants_emails_ibfk_1` FOREIGN KEY (`fk_tenants_id`) REFERENCES `tenants` (`tenants_id`);

--
-- Constraints for table `tenants_numbers`
--
ALTER TABLE `tenants_numbers`
  ADD CONSTRAINT `tenants_numbers_ibfk_1` FOREIGN KEY (`fk_tenants_id`) REFERENCES `tenants` (`tenants_id`);

--
-- Constraints for table `tenant_contracts`
--
ALTER TABLE `tenant_contracts`
  ADD CONSTRAINT `tenant_contracts_ibfk_1` FOREIGN KEY (`fk_tenant_id`) REFERENCES `tenants` (`tenants_id`),
  ADD CONSTRAINT `tenant_contracts_ibfk_2` FOREIGN KEY (`fk_rent_paid_by_id`) REFERENCES `rent_paid_by` (`rent_paid_by_id`),
  ADD CONSTRAINT `tenant_contracts_ibfk_3` FOREIGN KEY (`fk_tenant_contracts_type`) REFERENCES `tenant_contract_type` (`tenant_contract_type_id`),
  ADD CONSTRAINT `tenant_contracts_ibfk_4` FOREIGN KEY (`fk_tenant_contracts_frequency_of_payment_id`) REFERENCES `tenant_contracts_frequency_of_payment` (`tenant_contracts_frequency_of_payment_id`),
  ADD CONSTRAINT `tenant_contracts_ibfk_5` FOREIGN KEY (`fk_rent_paid_by_id`) REFERENCES `rent_paid_by` (`rent_paid_by_id`),
  ADD CONSTRAINT `tenant_contracts_ibfk_6` FOREIGN KEY (`fk_tenant_contracts_type`) REFERENCES `tenant_contract_type` (`tenant_contract_type_id`);

--
-- Constraints for table `tenant_payments_received`
--
ALTER TABLE `tenant_payments_received`
  ADD CONSTRAINT `tenant_payments_received_ibfk_1` FOREIGN KEY (`fk_periods_id`) REFERENCES `periods` (`periods_id`),
  ADD CONSTRAINT `tenant_payments_request_ibfk_10` FOREIGN KEY (`fk_contract_id`) REFERENCES `tenant_contracts` (`tenant_contracts_id`);

--
-- Constraints for table `tenant_payments_request`
--
ALTER TABLE `tenant_payments_request`
  ADD CONSTRAINT `tenant_payments_request_ibfk_1` FOREIGN KEY (`tenant_payments_request_id`) REFERENCES `tenant_contracts` (`fk_tenant_id`),
  ADD CONSTRAINT `tenant_payments_request_ibfk_2` FOREIGN KEY (`fk_contract_id`) REFERENCES `tenant_contracts` (`tenant_contracts_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
