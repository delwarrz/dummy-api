<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinancialTermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('financial_terms')->insert([
            [
                'title' => 'Accounts Payable',
                'details' => 'Accounts payable is a business finance 101 term. This represents your small business’s obligations to pay debts owed to lenders, suppliers, and creditors. Sometimes referred to as A/P or AP for short, accounts payable can be short or long term depending upon the type of credit provided to the business by the lender.'
            ],
            [
                'title' => 'Accounts Receivable',
                'details' => 'Also known as A/R (or AR, good guess), accounts receivables is another business finance 101 term that means the money owed to your small business by others for goods or services rendered. These accounts are labeled as assets because they represent a legal obligation for the customer to pay you cash for their short-term debt.'
            ],
            [
                'title' => 'Accrual Basis',
                'details' => 'The accrual basis of accounting is an accounting method of recording income when it’s actually earned and expenses when they actually occur. Accrual basis accounting is the most common approach used by larger businesses to record and maintain financial transactions.'
            ],
            [
                'title' => 'Accruals',
                'details' => 'A business finance term and definition referring to expenses that have been incurred but haven’t yet been recorded in the business books. Wages and payroll taxes are common examples.'
            ],
            [
                'title' => 'Asset',
                'details' => 'This business finance key term is anything that has value—whether tangible or intangible—and is owned by the business is considered an asset. Typical items listed as business assets are cash on hand, accounts receivable, buildings, equipment, inventory, and anything else that can be turned into cash.'
            ],
            [
                'title' => 'Balance Sheet',
                'details' => 'Along with three other reports relating to the financial health of your small business, the balance sheet is essential information that gives a “snapshot” of the company’s net worth at any given time. The report is a summary of the business assets and liabilities.'
            ],
            [
                'title' => 'Bookkeeping',
                'details' => 'A method of accounting that involves the timely recording of all financial transactions for the business.'
            ],
            [
                'title' => 'Capital',
                'details' => 'Refers to the overall wealth of a business as demonstrated by its cash accounts, assets, and investments. Often called “fixed capital,” it refers to the long-term worth of the business. Capital can be tangible, like durable goods, buildings, and equipment, or intangible such as intellectual property.'
            ],
            [
                'title' => 'Working Capital',
                'details' => 'Not to be confused with fixed capital, working capital is another business finance 101 term. It consists of the financial resources necessary for maintaining the day-to-day operation of the business. Working capital, by definition, is the business’s cash on hand or instruments that you can convert to cash quickly.'
            ],
            [
                'title' => 'Cash Flow',
                'details' => 'Every business needs cash to operate. The business finance term and definition cash flow refers to the amount of operating cash that “flows” through the business and affects the business’s liquidity. Cash flow reports reflect activity for a specified period of time, usually one accounting period or one month. Maintaining tight control of cash flow is especially important if your small business is new, since ready cash can be limited until the business begins to grow and produce more working capital.'
            ],
            [
                'title' => 'Cash Flow Projections',
                'details' => 'Future business decisions will depend on your educated cash flow projections. To plan ahead for upcoming expenditures and working capital, you need to depend on previous cash flow patterns. These patterns will give you a comprehensive look at how and when you receive and spend your cash. This info is the key to unlock informed, accurate cash flow projections.'
            ]
        ]);
    }
}
