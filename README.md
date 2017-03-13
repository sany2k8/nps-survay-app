# Steps for Creating a New Affiliate in OZ
### Create The Databases
> Go to http://{site_address}/affiliates/setup and create a **_new affiliate_**, This is going to create all the necessary common tables in the **_OZ Database_**.

### Adword API Update
>  Go to the **Curl Controllers** action naming **_actionGetAdspendsPerDay()_** and update the variable **_$gaAffiliatesWithId_** and add newly created sites **_Adwords Account Id_**

### Bing Ads API Update
>  Go to the **Curl Controllers** action naming **_actionGetBingAdsSpendPerDay()_** and update the condition for setting site id and add newly created sites **_Bing Account Id_**

### Update CheckPropertyCronStatus
>  Go to the **Curl Controllers** action naming **_actionCheckPropertyCronStatus()_** and update the variable **_$all_sites_** and add newly created sites **_Site_Id_**

### Google Adsense Revenue Update
>  Go to the **Revenue Controllers** action naming **_actionGetAdsenseRevenueFromAccount()_** and update the variable **_$domainWithId_** and add newly created sites **_Site_Id_** **&&** also update **_GenerateReport_** inside the **_adsence_** folder and add new site. Also have to create **source**.

### Update IntentMedia Revenue 
>  Go to the **Import Generic Controllers** action naming **actionGetIntentMediaRevenue()_** and update the variable **_$domainWithId_** and add newly created sites **_Site_Id_**.  Also have to create **source**.

### Time Series Daily & Hourly Data From Google Analytics
>  Navigate to **GoogleServerApi\examples\analytics_data.php** and add the value of the newly created sites id in the **$account_ids** variable.

### Stays.io
>  Update function **_staysIOChartData()** in the **ConsolidatedDashboard** Controller and also update the **Stays.io** view in the **Dashboard** view.

### provide_default_campaign_and_segment
> Update function **provide_default_campaign_and_segment** in the **Enum** component

### getSiteIdForBookingCom
> Update function **getSiteIdForBookingCom** in the **BookingAndCJController** controller

### getSiteIdForCJ
> Update function **getSiteIdForCJ** in the **BookingAndCJController** controller

### Insert_Transaction_In_Google_Analytics
> Fix Google Analytics Property ID

### On Curl controller fix site id's on actionGetCampaignNameById , actionGetAdgroupNameById,
> If needed

