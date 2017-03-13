<?php
/**
 * Created by Sabbir.
 * Email: sabbir1cse@gmail.com
 * Date: 3/30/13
 * Time: 9:21 PM
 * To change this template use File | Settings | File Templates.
 */

#namespace Custom;


class UrlManager
{
    public static function  getUrls()
    {
        return array(
            'urlFormat'=>'path',
            'showScriptName'=>false,
            #'caseSensitive'=>false,
            'rules'=>array(
                'service/geoip'=>array('site/GeoIP'),
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                'revenue-unique'=>array('transactions/RevenueUniqueChartHour'),
                'revenue-per-conversion'=>array('transactions/RevenueConversionChart'),
                'cost-per-conversion'=>array('transactions/CostPerConversion'),
                'cost-per-unique'=>array('transactions/CostPerVisit'),
                'profit'=>array('transactions/TotalProfitChart'),
                'ads-spend'=>array('transactions/AdsSpendReturn'),
                'repeat-customers'=>array('clients/repeatCustomers'),
                'new-customers'=>array('clients/newCustomers'),
                'total-customers'=>array('clients/totalCustomers'),
                'inquiries-per-person'=>array('transactions/InquiriesPerPerson'),
                'report-graph'=>array('reportGraph/Index'),
                'get-graph-data'=>array('reportGraph/GetGraphData'),
                'page-speed'=>array('reportGraph/PageSpeed'),
                'missing-image'=>array('reportGraph/missingImage'),
                'ga-data-migrate'=>array('googleAnalyticsDataMigration/GoogleAnalyticsDataMigration'),
                'ga-page-speed-migrate'=>array('googleAnalyticsDataMigration/GoogleAnalyticsPageSpeedMigration'),
                'add-intent-score'=>array('service/AddIntentMediaScore'),
                'ga-pending-data-migrate'=>array('googleAnalyticsDataMigration/PendingGaDataMigration'),
                'oz-data-migrate'=>array('rebuildOzDataMigration/OzDataMigration'),
                'cron-status'=>array('cronStatus/admin'),

                #'insurance-revenue'=>array('import/updateInsuranceRevenue'),
            ),
        );
    }
}


