<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Company
 *
 * @property string $name
 * @property bool $evaluationCompany
 * @property string $displayName
 * @property-read string $id
 * @property string $businessProfileId
 * @property-read \BusinessCentral\Models\AccountantPortalActivityCues[]|\BusinessCentral\EntityCollection $accountantPortalActivityCues
 * @property-read \BusinessCentral\Models\AccountantPortalFinanceCues[]|\BusinessCentral\EntityCollection $accountantPortalFinanceCues
 * @property-read \BusinessCentral\Models\AccountantPortalUserTasks[]|\BusinessCentral\EntityCollection $accountantPortalUserTasks
 * @property-read \BusinessCentral\Models\C2Graph[]|\BusinessCentral\EntityCollection $c2Graphs
 * @property-read \BusinessCentral\Models\InvoiceDocument[]|\BusinessCentral\EntityCollection $invoiceDocuments
 * @property-read \BusinessCentral\Models\InvoiceReminder[]|\BusinessCentral\EntityCollection $invoiceReminders
 * @property-read \BusinessCentral\Models\InvoicingAttachment[]|\BusinessCentral\EntityCollection $invoicingAttachments
 * @property-read \BusinessCentral\Models\InvoicingContact[]|\BusinessCentral\EntityCollection $invoicingContacts
 * @property-read \BusinessCentral\Models\InvoicingCountryRegion[]|\BusinessCentral\EntityCollection $invoicingCountryRegions
 * @property-read \BusinessCentral\Models\InvoicingCustomer[]|\BusinessCentral\EntityCollection $invoicingCustomers
 * @property-read \BusinessCentral\Models\InvoicingCustomersCoupon[]|\BusinessCentral\EntityCollection $invoicingCustomersCoupons
 * @property-read \BusinessCentral\Models\InvoicingEmailPreview[]|\BusinessCentral\EntityCollection $invoicingEmailPreviews
 * @property-read \BusinessCentral\Models\InvoicingEmailSetting[]|\BusinessCentral\EntityCollection $invoicingEmailSettings
 * @property-read \BusinessCentral\Models\InvoicingExportInvoice[]|\BusinessCentral\EntityCollection $invoicingExportInvoices
 * @property-read \BusinessCentral\Models\InvoicingGeneralSetting[]|\BusinessCentral\EntityCollection $invoicingGeneralSettings
 * @property-read \BusinessCentral\Models\InvoicingItem[]|\BusinessCentral\EntityCollection $invoicingItems
 * @property-read \BusinessCentral\Models\InvoicingKPI[]|\BusinessCentral\EntityCollection $invoicingKPIs
 * @property-read \BusinessCentral\Models\InvoicingLanguage[]|\BusinessCentral\EntityCollection $invoicingLanguages
 * @property-read \BusinessCentral\Models\InvoicingPaymentMethod[]|\BusinessCentral\EntityCollection $invoicingPaymentMethods
 * @property-read \BusinessCentral\Models\InvoicingPaymentTerm[]|\BusinessCentral\EntityCollection $invoicingPaymentTerms
 * @property-read \BusinessCentral\Models\InvoicingPDF[]|\BusinessCentral\EntityCollection $invoicingPDFs
 * @property-read \BusinessCentral\Models\InvoicingQBOSyncAuth[]|\BusinessCentral\EntityCollection $invoicingQBOSyncAuths
 * @property-read \BusinessCentral\Models\InvoicingSalesInvoiceOverview[]|\BusinessCentral\EntityCollection $invoicingSalesInvoiceOverviews
 * @property-read \BusinessCentral\Models\InvoicingSalesInvoice[]|\BusinessCentral\EntityCollection $invoicingSalesInvoices
 * @property-read \BusinessCentral\Models\InvoicingSalesInvoicesPayment[]|\BusinessCentral\EntityCollection $invoicingSalesInvoicesPayments
 * @property-read \BusinessCentral\Models\InvoicingSalesQuote[]|\BusinessCentral\EntityCollection $invoicingSalesQuotes
 * @property-read \BusinessCentral\Models\InvoicingSalesTaxSetup[]|\BusinessCentral\EntityCollection $invoicingSalesTaxSetups
 * @property-read \BusinessCentral\Models\InvoicingSMTPMailSetup[]|\BusinessCentral\EntityCollection $invoicingSMTPMailSetups
 * @property-read \BusinessCentral\Models\InvoicingSyncServicesSetting[]|\BusinessCentral\EntityCollection $invoicingSyncServicesSettings
 * @property-read \BusinessCentral\Models\InvoicingTaxArea[]|\BusinessCentral\EntityCollection $invoicingTaxAreas
 * @property-read \BusinessCentral\Models\InvoicingTaxGroup[]|\BusinessCentral\EntityCollection $invoicingTaxGroups
 * @property-read \BusinessCentral\Models\InvoicingTaxRate[]|\BusinessCentral\EntityCollection $invoicingTaxRates
 * @property-read \BusinessCentral\Models\InvoicingTestMail[]|\BusinessCentral\EntityCollection $invoicingTestMails
 * @property-read \BusinessCentral\Models\InvoicingUnitsOfMeasure[]|\BusinessCentral\EntityCollection $invoicingUnitsOfMeasures
 * @property-read \BusinessCentral\Models\InvoicingVATSetup[]|\BusinessCentral\EntityCollection $invoicingVATSetups
 * @property-read \BusinessCentral\Models\Powerbifinance[]|\BusinessCentral\EntityCollection $powerbifinances
 * @property-read \BusinessCentral\Models\UserTaskSetComplete[]|\BusinessCentral\EntityCollection $userTaskSetCompletes
 * @property-read \BusinessCentral\Models\ItemSalesAndProfit[]|\BusinessCentral\EntityCollection $itemSalesAndProfits
 * @property-read \BusinessCentral\Models\ItemSalesByCustomer[]|\BusinessCentral\EntityCollection $itemSalesByCustomers
 * @property-read \BusinessCentral\Models\SalesDashboard[]|\BusinessCentral\EntityCollection $salesDashboards
 * @property-read \BusinessCentral\Models\SalesOpportunities[]|\BusinessCentral\EntityCollection $salesOpportunities
 * @property-read \BusinessCentral\Models\SalesOrdersBySalesPerson[]|\BusinessCentral\EntityCollection $salesOrdersBySalesPeople
 * @property-read \BusinessCentral\Models\TopCustomerOverview[]|\BusinessCentral\EntityCollection $topCustomerOverviews
 * @property-read \BusinessCentral\Models\CsApprovalComments[]|\BusinessCentral\EntityCollection $csApprovalComments
 * @property-read \BusinessCentral\Models\CsApprovalDocument[]|\BusinessCentral\EntityCollection $csApprovalDocuments
 * @property-read \BusinessCentral\Models\CsApprovalDocumentApprovalEntries[]|\BusinessCentral\EntityCollection $csApprovalDocumentApprovalEntries
 * @property-read \BusinessCentral\Models\CsApprovalDocumentApprovalComments[]|\BusinessCentral\EntityCollection $csApprovalDocumentApprovalComments
 * @property-read \BusinessCentral\Models\CsApprovalDocumentAttachedFiles[]|\BusinessCentral\EntityCollection $csApprovalDocumentAttachedFiles
 * @property-read \BusinessCentral\Models\CsApprovalEntries[]|\BusinessCentral\EntityCollection $csApprovalEntries
 * @property-read \BusinessCentral\Models\CsApprovalSharing[]|\BusinessCentral\EntityCollection $csApprovalSharings
 * @property-read \BusinessCentral\Models\CsApprovers[]|\BusinessCentral\EntityCollection $csApprovers
 * @property-read \BusinessCentral\Models\CsDeferralTemplates[]|\BusinessCentral\EntityCollection $csDeferralTemplates
 * @property-read \BusinessCentral\Models\CsDimensionValues[]|\BusinessCentral\EntityCollection $csDimensionValues
 * @property-read \BusinessCentral\Models\CsEnabledReasonCodes[]|\BusinessCentral\EntityCollection $csEnabledReasonCodes
 * @property-read \BusinessCentral\Models\CsFixedAssets[]|\BusinessCentral\EntityCollection $csFixedAssets
 * @property-read \BusinessCentral\Models\CsGLAccounts[]|\BusinessCentral\EntityCollection $csGLAccounts
 * @property-read \BusinessCentral\Models\CsItemCharges[]|\BusinessCentral\EntityCollection $csItemCharges
 * @property-read \BusinessCentral\Models\CsItems[]|\BusinessCentral\EntityCollection $csItems
 * @property-read \BusinessCentral\Models\CsJobs[]|\BusinessCentral\EntityCollection $csJobs
 * @property-read \BusinessCentral\Models\CsJobTasks[]|\BusinessCentral\EntityCollection $csJobTasks
 * @property-read \BusinessCentral\Models\CsLocationCodes[]|\BusinessCentral\EntityCollection $csLocationCodes
 * @property-read \BusinessCentral\Models\CsPostedApprovalEntries[]|\BusinessCentral\EntityCollection $csPostedApprovalEntries
 * @property-read \BusinessCentral\Models\CsPostedDocSearch[]|\BusinessCentral\EntityCollection $csPostedDocSearches
 * @property-read \BusinessCentral\Models\CsPostedPurchaseCrMemos[]|\BusinessCentral\EntityCollection $csPostedPurchaseCrMemos
 * @property-read \BusinessCentral\Models\CsPostedPurchaseCrMemoPurchLines[]|\BusinessCentral\EntityCollection $csPostedPurchaseCrMemoPurchLines
 * @property-read \BusinessCentral\Models\CsPostedPurchaseCrMemoApprovalEntries[]|\BusinessCentral\EntityCollection $csPostedPurchaseCrMemoApprovalEntries
 * @property-read \BusinessCentral\Models\CsPostedPurchaseCrMemoApprovalComments[]|\BusinessCentral\EntityCollection $csPostedPurchaseCrMemoApprovalComments
 * @property-read \BusinessCentral\Models\CsPostedPurchaseCrMemoAttachedFiles[]|\BusinessCentral\EntityCollection $csPostedPurchaseCrMemoAttachedFiles
 * @property-read \BusinessCentral\Models\CsPostedPurchaseInvoices[]|\BusinessCentral\EntityCollection $csPostedPurchaseInvoices
 * @property-read \BusinessCentral\Models\CsPostedPurchaseInvoicePurchLines[]|\BusinessCentral\EntityCollection $csPostedPurchaseInvoicePurchLines
 * @property-read \BusinessCentral\Models\CsPostedPurchaseInvoiceApprovalEntries[]|\BusinessCentral\EntityCollection $csPostedPurchaseInvoiceApprovalEntries
 * @property-read \BusinessCentral\Models\CsPostedPurchaseInvoiceApprovalComments[]|\BusinessCentral\EntityCollection $csPostedPurchaseInvoiceApprovalComments
 * @property-read \BusinessCentral\Models\CsPostedPurchaseInvoiceAttachedFiles[]|\BusinessCentral\EntityCollection $csPostedPurchaseInvoiceAttachedFiles
 * @property-read \BusinessCentral\Models\CsProdPostGroups[]|\BusinessCentral\EntityCollection $csProdPostGroups
 * @property-read \BusinessCentral\Models\CsPurchaseDocument[]|\BusinessCentral\EntityCollection $csPurchaseDocuments
 * @property-read \BusinessCentral\Models\CsPurchaseDocumentPurchLines[]|\BusinessCentral\EntityCollection $csPurchaseDocumentPurchLines
 * @property-read \BusinessCentral\Models\CsPurchaseDocumentApprovalEntries[]|\BusinessCentral\EntityCollection $csPurchaseDocumentApprovalEntries
 * @property-read \BusinessCentral\Models\CsPurchaseDocumentApprovalComments[]|\BusinessCentral\EntityCollection $csPurchaseDocumentApprovalComments
 * @property-read \BusinessCentral\Models\CsPurchaseDocumentAttachedFiles[]|\BusinessCentral\EntityCollection $csPurchaseDocumentAttachedFiles
 * @property-read \BusinessCentral\Models\CsPurchaseLine[]|\BusinessCentral\EntityCollection $csPurchaseLines
 * @property-read \BusinessCentral\Models\CsStdAmountDistribCodes[]|\BusinessCentral\EntityCollection $csStdAmountDistribCodes
 * @property-read \BusinessCentral\Models\CsStdAmountDistribCodesVendors[]|\BusinessCentral\EntityCollection $csStdAmountDistribCodesVendors
 * @property-read \BusinessCentral\Models\CsUnitOfMeasure[]|\BusinessCentral\EntityCollection $csUnitOfMeasures
 * @property-read \BusinessCentral\Models\CsVATProdPostGroups[]|\BusinessCentral\EntityCollection $csVATProdPostGroups
 * @property-read \BusinessCentral\Models\CsVendorInfo[]|\BusinessCentral\EntityCollection $csVendorInfos
 * @property-read \BusinessCentral\Models\CsVendorInfoComments[]|\BusinessCentral\EntityCollection $csVendorInfoComments
 * @property-read \BusinessCentral\Models\CsVendorInfoContacts[]|\BusinessCentral\EntityCollection $csVendorInfoContacts
 * @property-read \BusinessCentral\Models\CsVendorInfoDocuments[]|\BusinessCentral\EntityCollection $csVendorInfoDocuments
 * @property-read \BusinessCentral\Models\CsWebHelp[]|\BusinessCentral\EntityCollection $csWebHelps
 * @property-read \BusinessCentral\Models\CsWebMenu[]|\BusinessCentral\EntityCollection $csWebMenus
 * @property-read \BusinessCentral\Models\CsWebSetup[]|\BusinessCentral\EntityCollection $csWebSetups
 * @property-read \BusinessCentral\Models\CsWebSubMenu[]|\BusinessCentral\EntityCollection $csWebSubMenus
 * @property-read \BusinessCentral\Models\CsWebUser[]|\BusinessCentral\EntityCollection $csWebUsers
 * @property-read \BusinessCentral\Models\CsWebUserPermissions[]|\BusinessCentral\EntityCollection $csWebUserPermissions
 * @property-read \BusinessCentral\Models\CsWebUserCompany[]|\BusinessCentral\EntityCollection $csWebUserCompanies
 * @property-read \BusinessCentral\Models\CsWebUserPmsSelection[]|\BusinessCentral\EntityCollection $csWebUserPmsSelections
 * @property-read \BusinessCentral\Models\ExcelTemplateAgedAccountsPayable[]|\BusinessCentral\EntityCollection $excelTemplateAgedAccountsPayables
 * @property-read \BusinessCentral\Models\ExcelTemplateAgedAccountsReceivable[]|\BusinessCentral\EntityCollection $excelTemplateAgedAccountsReceivables
 * @property-read \BusinessCentral\Models\ExcelTemplateBalanceSheet[]|\BusinessCentral\EntityCollection $excelTemplateBalanceSheets
 * @property-read \BusinessCentral\Models\ExcelTemplateCashFlowStatement[]|\BusinessCentral\EntityCollection $excelTemplateCashFlowStatements
 * @property-read \BusinessCentral\Models\ExcelTemplateIncomeStatement[]|\BusinessCentral\EntityCollection $excelTemplateIncomeStatements
 * @property-read \BusinessCentral\Models\ExcelTemplateRetainedEarnings[]|\BusinessCentral\EntityCollection $excelTemplateRetainedEarnings
 * @property-read \BusinessCentral\Models\ExcelTemplateTrialBalance[]|\BusinessCentral\EntityCollection $excelTemplateTrialBalances
 * @property-read \BusinessCentral\Models\ExcelTemplateViewCompanyInformation[]|\BusinessCentral\EntityCollection $excelTemplateViewCompanyInformations
 * @property-read \BusinessCentral\Models\GeneralJournals[]|\BusinessCentral\EntityCollection $generalJournals
 * @property-read \BusinessCentral\Models\JobList[]|\BusinessCentral\EntityCollection $jobLists
 * @property-read \BusinessCentral\Models\JobPlanningLines[]|\BusinessCentral\EntityCollection $jobPlanningLines
 * @property-read \BusinessCentral\Models\JobTaskLines[]|\BusinessCentral\EntityCollection $jobTaskLines
 * @property-read \BusinessCentral\Models\PowerBIAgedAccPayable[]|\BusinessCentral\EntityCollection $powerBIAgedAccPayables
 * @property-read \BusinessCentral\Models\PowerBIAgedAccReceivable[]|\BusinessCentral\EntityCollection $powerBIAgedAccReceivables
 * @property-read \BusinessCentral\Models\PowerBIAgedInventoryChart[]|\BusinessCentral\EntityCollection $powerBIAgedInventoryCharts
 * @property-read \BusinessCentral\Models\PowerBIJobActVBudgCost[]|\BusinessCentral\EntityCollection $powerBIJobActVBudgCosts
 * @property-read \BusinessCentral\Models\PowerBIJobActVBudgPrice[]|\BusinessCentral\EntityCollection $powerBIJobActVBudgPrices
 * @property-read \BusinessCentral\Models\PowerBIJobProfitability[]|\BusinessCentral\EntityCollection $powerBIJobProfitabilities
 * @property-read \BusinessCentral\Models\PowerBIReportLabels[]|\BusinessCentral\EntityCollection $powerBIReportLabels
 * @property-read \BusinessCentral\Models\PowerBISalesPipeline[]|\BusinessCentral\EntityCollection $powerBISalesPipelines
 * @property-read \BusinessCentral\Models\PowerBITop5Opportunities[]|\BusinessCentral\EntityCollection $powerBITop5Opportunities
 * @property-read \BusinessCentral\Models\PowerBIWorkDateCalc[]|\BusinessCentral\EntityCollection $powerBIWorkDateCalcs
 * @property-read \BusinessCentral\Models\PurchaseDocumentLines[]|\BusinessCentral\EntityCollection $purchaseDocumentLines
 * @property-read \BusinessCentral\Models\PurchaseDocuments[]|\BusinessCentral\EntityCollection $purchaseDocuments
 * @property-read \BusinessCentral\Models\PurchaseDocumentsworkflowPurchaseDocumentLines[]|\BusinessCentral\EntityCollection $purchaseDocumentsworkflowPurchaseDocumentLines
 * @property-read \BusinessCentral\Models\SalesDocumentLines[]|\BusinessCentral\EntityCollection $salesDocumentLines
 * @property-read \BusinessCentral\Models\SalesDocuments[]|\BusinessCentral\EntityCollection $salesDocuments
 * @property-read \BusinessCentral\Models\SalesDocumentsworkflowSalesDocumentLines[]|\BusinessCentral\EntityCollection $salesDocumentsworkflowSalesDocumentLines
 * @property-read \BusinessCentral\Models\WorkflowCustomers[]|\BusinessCentral\EntityCollection $workflowCustomers
 * @property-read \BusinessCentral\Models\WorkflowGenJournalBatches[]|\BusinessCentral\EntityCollection $workflowGenJournalBatches
 * @property-read \BusinessCentral\Models\WorkflowGenJournalLines[]|\BusinessCentral\EntityCollection $workflowGenJournalLines
 * @property-read \BusinessCentral\Models\WorkflowItems[]|\BusinessCentral\EntityCollection $workflowItems
 * @property-read \BusinessCentral\Models\WorkflowPurchaseDocumentLines[]|\BusinessCentral\EntityCollection $workflowPurchaseDocumentLines
 * @property-read \BusinessCentral\Models\WorkflowPurchaseDocuments[]|\BusinessCentral\EntityCollection $workflowPurchaseDocuments
 * @property-read \BusinessCentral\Models\WorkflowPurchaseDocumentsworkflowPurchaseDocumentLines[]|\BusinessCentral\EntityCollection $workflowPurchaseDocumentsworkflowPurchaseDocumentLines
 * @property-read \BusinessCentral\Models\WorkflowSalesDocumentLines[]|\BusinessCentral\EntityCollection $workflowSalesDocumentLines
 * @property-read \BusinessCentral\Models\WorkflowSalesDocuments[]|\BusinessCentral\EntityCollection $workflowSalesDocuments
 * @property-read \BusinessCentral\Models\WorkflowSalesDocumentsworkflowSalesDocumentLines[]|\BusinessCentral\EntityCollection $workflowSalesDocumentsworkflowSalesDocumentLines
 * @property-read \BusinessCentral\Models\WorkflowVendors[]|\BusinessCentral\EntityCollection $workflowVendors
 * @property-read \BusinessCentral\Models\WorkflowWebhookSubscriptions[]|\BusinessCentral\EntityCollection $workflowWebhookSubscriptions
 * @property-read \BusinessCentral\Models\BankAccountLedgerEntries[]|\BusinessCentral\EntityCollection $bankAccountLedgerEntries
 * @property-read \BusinessCentral\Models\CustLedgerEntries[]|\BusinessCentral\EntityCollection $custLedgerEntries
 * @property-read \BusinessCentral\Models\DimensionSetEntries[]|\BusinessCentral\EntityCollection $dimensionSetEntries
 * @property-read \BusinessCentral\Models\FALedgerEntries[]|\BusinessCentral\EntityCollection $fALedgerEntries
 * @property-read \BusinessCentral\Models\GLBudgetEntries[]|\BusinessCentral\EntityCollection $gLBudgetEntries
 * @property-read \BusinessCentral\Models\GLEntries[]|\BusinessCentral\EntityCollection $gLEntries
 * @property-read \BusinessCentral\Models\ItemLedgerEntries[]|\BusinessCentral\EntityCollection $itemLedgerEntries
 * @property-read \BusinessCentral\Models\JobLedgerEntries[]|\BusinessCentral\EntityCollection $jobLedgerEntries
 * @property-read \BusinessCentral\Models\PowerBICustItemLedgEnt[]|\BusinessCentral\EntityCollection $powerBICustItemLedgEnts
 * @property-read \BusinessCentral\Models\PowerBICustLedgerEntries[]|\BusinessCentral\EntityCollection $powerBICustLedgerEntries
 * @property-read \BusinessCentral\Models\PowerBICustomerList[]|\BusinessCentral\EntityCollection $powerBICustomerLists
 * @property-read \BusinessCentral\Models\PowerBIGLAmountList[]|\BusinessCentral\EntityCollection $powerBIGLAmountLists
 * @property-read \BusinessCentral\Models\PowerBIGLBudgetedAmount[]|\BusinessCentral\EntityCollection $powerBIGLBudgetedAmounts
 * @property-read \BusinessCentral\Models\PowerBIItemPurchaseList[]|\BusinessCentral\EntityCollection $powerBIItemPurchaseLists
 * @property-read \BusinessCentral\Models\PowerBIItemSalesList[]|\BusinessCentral\EntityCollection $powerBIItemSalesLists
 * @property-read \BusinessCentral\Models\PowerBIJobsList[]|\BusinessCentral\EntityCollection $powerBIJobsLists
 * @property-read \BusinessCentral\Models\PowerBIPurchaseHdrVendor[]|\BusinessCentral\EntityCollection $powerBIPurchaseHdrVendors
 * @property-read \BusinessCentral\Models\PowerBIPurchaseList[]|\BusinessCentral\EntityCollection $powerBIPurchaseLists
 * @property-read \BusinessCentral\Models\PowerBISalesHdrCust[]|\BusinessCentral\EntityCollection $powerBISalesHdrCusts
 * @property-read \BusinessCentral\Models\PowerBISalesList[]|\BusinessCentral\EntityCollection $powerBISalesLists
 * @property-read \BusinessCentral\Models\PowerBITopCustOverview[]|\BusinessCentral\EntityCollection $powerBITopCustOverviews
 * @property-read \BusinessCentral\Models\PowerBIVendItemLedgEnt[]|\BusinessCentral\EntityCollection $powerBIVendItemLedgEnts
 * @property-read \BusinessCentral\Models\PowerBIVendorLedgerEntries[]|\BusinessCentral\EntityCollection $powerBIVendorLedgerEntries
 * @property-read \BusinessCentral\Models\PowerBIVendorList[]|\BusinessCentral\EntityCollection $powerBIVendorLists
 * @property-read \BusinessCentral\Models\ResLedgerEntries[]|\BusinessCentral\EntityCollection $resLedgerEntries
 * @property-read \BusinessCentral\Models\SegmentLines[]|\BusinessCentral\EntityCollection $segmentLines
 * @property-read \BusinessCentral\Models\ValueEntries[]|\BusinessCentral\EntityCollection $valueEntries
 * @property-read \BusinessCentral\Models\VendorLedgerEntries[]|\BusinessCentral\EntityCollection $vendorLedgerEntries
 * @method \BusinessCentral\Query\Builder accountantPortalActivityCues()
 * @method \BusinessCentral\Query\Builder accountantPortalFinanceCues()
 * @method \BusinessCentral\Query\Builder accountantPortalUserTasks()
 * @method \BusinessCentral\Query\Builder c2Graphs()
 * @method \BusinessCentral\Query\Builder invoiceDocuments()
 * @method \BusinessCentral\Query\Builder invoiceReminders()
 * @method \BusinessCentral\Query\Builder invoicingAttachments()
 * @method \BusinessCentral\Query\Builder invoicingContacts()
 * @method \BusinessCentral\Query\Builder invoicingCountryRegions()
 * @method \BusinessCentral\Query\Builder invoicingCustomers()
 * @method \BusinessCentral\Query\Builder invoicingCustomersCoupons()
 * @method \BusinessCentral\Query\Builder invoicingEmailPreviews()
 * @method \BusinessCentral\Query\Builder invoicingEmailSettings()
 * @method \BusinessCentral\Query\Builder invoicingExportInvoices()
 * @method \BusinessCentral\Query\Builder invoicingGeneralSettings()
 * @method \BusinessCentral\Query\Builder invoicingItems()
 * @method \BusinessCentral\Query\Builder invoicingKPIs()
 * @method \BusinessCentral\Query\Builder invoicingLanguages()
 * @method \BusinessCentral\Query\Builder invoicingPaymentMethods()
 * @method \BusinessCentral\Query\Builder invoicingPaymentTerms()
 * @method \BusinessCentral\Query\Builder invoicingPDFs()
 * @method \BusinessCentral\Query\Builder invoicingQBOSyncAuths()
 * @method \BusinessCentral\Query\Builder invoicingSalesInvoiceOverviews()
 * @method \BusinessCentral\Query\Builder invoicingSalesInvoices()
 * @method \BusinessCentral\Query\Builder invoicingSalesInvoicesPayments()
 * @method \BusinessCentral\Query\Builder invoicingSalesQuotes()
 * @method \BusinessCentral\Query\Builder invoicingSalesTaxSetups()
 * @method \BusinessCentral\Query\Builder invoicingSMTPMailSetups()
 * @method \BusinessCentral\Query\Builder invoicingSyncServicesSettings()
 * @method \BusinessCentral\Query\Builder invoicingTaxAreas()
 * @method \BusinessCentral\Query\Builder invoicingTaxGroups()
 * @method \BusinessCentral\Query\Builder invoicingTaxRates()
 * @method \BusinessCentral\Query\Builder invoicingTestMails()
 * @method \BusinessCentral\Query\Builder invoicingUnitsOfMeasures()
 * @method \BusinessCentral\Query\Builder invoicingVATSetups()
 * @method \BusinessCentral\Query\Builder powerbifinances()
 * @method \BusinessCentral\Query\Builder userTaskSetCompletes()
 * @method \BusinessCentral\Query\Builder itemSalesAndProfits()
 * @method \BusinessCentral\Query\Builder itemSalesByCustomers()
 * @method \BusinessCentral\Query\Builder salesDashboards()
 * @method \BusinessCentral\Query\Builder salesOpportunities()
 * @method \BusinessCentral\Query\Builder salesOrdersBySalesPeople()
 * @method \BusinessCentral\Query\Builder topCustomerOverviews()
 * @method \BusinessCentral\Query\Builder csApprovalComments()
 * @method \BusinessCentral\Query\Builder csApprovalDocuments()
 * @method \BusinessCentral\Query\Builder csApprovalDocumentApprovalEntries()
 * @method \BusinessCentral\Query\Builder csApprovalDocumentApprovalComments()
 * @method \BusinessCentral\Query\Builder csApprovalDocumentAttachedFiles()
 * @method \BusinessCentral\Query\Builder csApprovalEntries()
 * @method \BusinessCentral\Query\Builder csApprovalSharings()
 * @method \BusinessCentral\Query\Builder csApprovers()
 * @method \BusinessCentral\Query\Builder csDeferralTemplates()
 * @method \BusinessCentral\Query\Builder csDimensionValues()
 * @method \BusinessCentral\Query\Builder csEnabledReasonCodes()
 * @method \BusinessCentral\Query\Builder csFixedAssets()
 * @method \BusinessCentral\Query\Builder csGLAccounts()
 * @method \BusinessCentral\Query\Builder csItemCharges()
 * @method \BusinessCentral\Query\Builder csItems()
 * @method \BusinessCentral\Query\Builder csJobs()
 * @method \BusinessCentral\Query\Builder csJobTasks()
 * @method \BusinessCentral\Query\Builder csLocationCodes()
 * @method \BusinessCentral\Query\Builder csPostedApprovalEntries()
 * @method \BusinessCentral\Query\Builder csPostedDocSearches()
 * @method \BusinessCentral\Query\Builder csPostedPurchaseCrMemos()
 * @method \BusinessCentral\Query\Builder csPostedPurchaseCrMemoPurchLines()
 * @method \BusinessCentral\Query\Builder csPostedPurchaseCrMemoApprovalEntries()
 * @method \BusinessCentral\Query\Builder csPostedPurchaseCrMemoApprovalComments()
 * @method \BusinessCentral\Query\Builder csPostedPurchaseCrMemoAttachedFiles()
 * @method \BusinessCentral\Query\Builder csPostedPurchaseInvoices()
 * @method \BusinessCentral\Query\Builder csPostedPurchaseInvoicePurchLines()
 * @method \BusinessCentral\Query\Builder csPostedPurchaseInvoiceApprovalEntries()
 * @method \BusinessCentral\Query\Builder csPostedPurchaseInvoiceApprovalComments()
 * @method \BusinessCentral\Query\Builder csPostedPurchaseInvoiceAttachedFiles()
 * @method \BusinessCentral\Query\Builder csProdPostGroups()
 * @method \BusinessCentral\Query\Builder csPurchaseDocuments()
 * @method \BusinessCentral\Query\Builder csPurchaseDocumentPurchLines()
 * @method \BusinessCentral\Query\Builder csPurchaseDocumentApprovalEntries()
 * @method \BusinessCentral\Query\Builder csPurchaseDocumentApprovalComments()
 * @method \BusinessCentral\Query\Builder csPurchaseDocumentAttachedFiles()
 * @method \BusinessCentral\Query\Builder csPurchaseLines()
 * @method \BusinessCentral\Query\Builder csStdAmountDistribCodes()
 * @method \BusinessCentral\Query\Builder csStdAmountDistribCodesVendors()
 * @method \BusinessCentral\Query\Builder csUnitOfMeasures()
 * @method \BusinessCentral\Query\Builder csVATProdPostGroups()
 * @method \BusinessCentral\Query\Builder csVendorInfos()
 * @method \BusinessCentral\Query\Builder csVendorInfoComments()
 * @method \BusinessCentral\Query\Builder csVendorInfoContacts()
 * @method \BusinessCentral\Query\Builder csVendorInfoDocuments()
 * @method \BusinessCentral\Query\Builder csWebHelps()
 * @method \BusinessCentral\Query\Builder csWebMenus()
 * @method \BusinessCentral\Query\Builder csWebSetups()
 * @method \BusinessCentral\Query\Builder csWebSubMenus()
 * @method \BusinessCentral\Query\Builder csWebUsers()
 * @method \BusinessCentral\Query\Builder csWebUserPermissions()
 * @method \BusinessCentral\Query\Builder csWebUserCompanies()
 * @method \BusinessCentral\Query\Builder csWebUserPmsSelections()
 * @method \BusinessCentral\Query\Builder excelTemplateAgedAccountsPayables()
 * @method \BusinessCentral\Query\Builder excelTemplateAgedAccountsReceivables()
 * @method \BusinessCentral\Query\Builder excelTemplateBalanceSheets()
 * @method \BusinessCentral\Query\Builder excelTemplateCashFlowStatements()
 * @method \BusinessCentral\Query\Builder excelTemplateIncomeStatements()
 * @method \BusinessCentral\Query\Builder excelTemplateRetainedEarnings()
 * @method \BusinessCentral\Query\Builder excelTemplateTrialBalances()
 * @method \BusinessCentral\Query\Builder excelTemplateViewCompanyInformations()
 * @method \BusinessCentral\Query\Builder generalJournals()
 * @method \BusinessCentral\Query\Builder jobLists()
 * @method \BusinessCentral\Query\Builder jobPlanningLines()
 * @method \BusinessCentral\Query\Builder jobTaskLines()
 * @method \BusinessCentral\Query\Builder powerBIAgedAccPayables()
 * @method \BusinessCentral\Query\Builder powerBIAgedAccReceivables()
 * @method \BusinessCentral\Query\Builder powerBIAgedInventoryCharts()
 * @method \BusinessCentral\Query\Builder powerBIJobActVBudgCosts()
 * @method \BusinessCentral\Query\Builder powerBIJobActVBudgPrices()
 * @method \BusinessCentral\Query\Builder powerBIJobProfitabilities()
 * @method \BusinessCentral\Query\Builder powerBIReportLabels()
 * @method \BusinessCentral\Query\Builder powerBISalesPipelines()
 * @method \BusinessCentral\Query\Builder powerBITop5Opportunities()
 * @method \BusinessCentral\Query\Builder powerBIWorkDateCalcs()
 * @method \BusinessCentral\Query\Builder purchaseDocumentLines()
 * @method \BusinessCentral\Query\Builder purchaseDocuments()
 * @method \BusinessCentral\Query\Builder purchaseDocumentsworkflowPurchaseDocumentLines()
 * @method \BusinessCentral\Query\Builder salesDocumentLines()
 * @method \BusinessCentral\Query\Builder salesDocuments()
 * @method \BusinessCentral\Query\Builder salesDocumentsworkflowSalesDocumentLines()
 * @method \BusinessCentral\Query\Builder workflowCustomers()
 * @method \BusinessCentral\Query\Builder workflowGenJournalBatches()
 * @method \BusinessCentral\Query\Builder workflowGenJournalLines()
 * @method \BusinessCentral\Query\Builder workflowItems()
 * @method \BusinessCentral\Query\Builder workflowPurchaseDocumentLines()
 * @method \BusinessCentral\Query\Builder workflowPurchaseDocuments()
 * @method \BusinessCentral\Query\Builder workflowPurchaseDocumentsworkflowPurchaseDocumentLines()
 * @method \BusinessCentral\Query\Builder workflowSalesDocumentLines()
 * @method \BusinessCentral\Query\Builder workflowSalesDocuments()
 * @method \BusinessCentral\Query\Builder workflowSalesDocumentsworkflowSalesDocumentLines()
 * @method \BusinessCentral\Query\Builder workflowVendors()
 * @method \BusinessCentral\Query\Builder workflowWebhookSubscriptions()
 * @method \BusinessCentral\Query\Builder bankAccountLedgerEntries()
 * @method \BusinessCentral\Query\Builder custLedgerEntries()
 * @method \BusinessCentral\Query\Builder dimensionSetEntries()
 * @method \BusinessCentral\Query\Builder fALedgerEntries()
 * @method \BusinessCentral\Query\Builder gLBudgetEntries()
 * @method \BusinessCentral\Query\Builder gLEntries()
 * @method \BusinessCentral\Query\Builder itemLedgerEntries()
 * @method \BusinessCentral\Query\Builder jobLedgerEntries()
 * @method \BusinessCentral\Query\Builder powerBICustItemLedgEnts()
 * @method \BusinessCentral\Query\Builder powerBICustLedgerEntries()
 * @method \BusinessCentral\Query\Builder powerBICustomerLists()
 * @method \BusinessCentral\Query\Builder powerBIGLAmountLists()
 * @method \BusinessCentral\Query\Builder powerBIGLBudgetedAmounts()
 * @method \BusinessCentral\Query\Builder powerBIItemPurchaseLists()
 * @method \BusinessCentral\Query\Builder powerBIItemSalesLists()
 * @method \BusinessCentral\Query\Builder powerBIJobsLists()
 * @method \BusinessCentral\Query\Builder powerBIPurchaseHdrVendors()
 * @method \BusinessCentral\Query\Builder powerBIPurchaseLists()
 * @method \BusinessCentral\Query\Builder powerBISalesHdrCusts()
 * @method \BusinessCentral\Query\Builder powerBISalesLists()
 * @method \BusinessCentral\Query\Builder powerBITopCustOverviews()
 * @method \BusinessCentral\Query\Builder powerBIVendItemLedgEnts()
 * @method \BusinessCentral\Query\Builder powerBIVendorLedgerEntries()
 * @method \BusinessCentral\Query\Builder powerBIVendorLists()
 * @method \BusinessCentral\Query\Builder resLedgerEntries()
 * @method \BusinessCentral\Query\Builder segmentLines()
 * @method \BusinessCentral\Query\Builder valueEntries()
 * @method \BusinessCentral\Query\Builder vendorLedgerEntries()
 *
 */
class Company extends Entity
{
    protected static $schema_type = 'Company';

    protected $fillable = [
        'name',
        'evaluationCompany',
        'displayName',
        'businessProfileId',
    ];

    protected $guarded  = [
        'id',
    ];
}