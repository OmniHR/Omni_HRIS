<?php

/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * MintHCM is a Human Capital Management software based on SuiteCRM developed by MintHCM,
 * Copyright (C) 2018-2023 MintHCM
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by SugarCRM"
 * logo and "Supercharged by SuiteCRM" logo and "Reinvented by MintHCM" logo.
 * If the display of the logos is not reasonably feasible for technical reasons, the
 * Appropriate Legal Notices must display the words "Powered by SugarCRM" and
 * "Supercharged by SuiteCRM" and "Reinvented by MintHCM".
 */
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Home',
    'LBL_NEW_FORM_TITLE' => 'New Contact',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_PHONE' => 'Phone:',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'My Pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline By Sales Stage',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Pipeline By Sales Stage',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_ACCOUNT' => 'Create Account',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_NEW_LEAD' => 'Create Lead',
    'LNK_NEW_CASE' => 'Create Case',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_BUG' => 'Report Bug',
    'LNK_NEW_SEND_EMAIL' => 'Compose Email',
    'LBL_NO_ACCESS' => 'You do not have access to this area. Contact your site administrator to obtain access',
    'LBL_NO_RESULTS_IN_MODULE' => '-- No Results --',
    'LBL_NO_RESULTS' => '<h2>There were no results found. Please search again.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Search Tips:</h3><ul><li>Make sure you have the proper categories selected above.</li><li>Broaden your search criteria.</li><li>If you still cannot find any results try the advanced search option.</li></ul>',
    'LBL_ADD_DASHLETS' => 'Add MintHCM Dashlets',
    'LBL_WEBSITE_TITLE' => 'Website',
    'LBL_RSS_TITLE' => 'News Feed',
    'LBL_CLOSE_DASHLETS' => 'Close',
    'LBL_OPTIONS' => 'Options',
    // dashlet search fields
    'LBL_TODAY' => 'Today',
    'LBL_YESTERDAY' => 'Yesterday',
    'LBL_TOMORROW' => 'Tomorrow',
    'LBL_NEXT_WEEK' => 'Next Week',
    'LBL_LAST_7_DAYS' => 'Last 7 Days',
    'LBL_NEXT_7_DAYS' => 'Next 7 Days',
    'LBL_LAST_MONTH' => 'Last Month',
    'LBL_NEXT_MONTH' => 'Next Month',
    'LBL_LAST_YEAR' => 'Last Year',
    'LBL_NEXT_YEAR' => 'Next Year',
    'LBL_LAST_30_DAYS' => 'Last 30 Days',
    'LBL_NEXT_30_DAYS' => 'Next 30 Days',
    'LBL_THIS_MONTH' => 'This Month',
    'LBL_THIS_YEAR' => 'This Year',
    'LBL_MODULES' => 'Modules',
    'LBL_CHARTS' => 'Charts',
    'LBL_TOOLS' => 'Tools',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => 'Search Result',
    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Module Views',
        'Portal' => 'Portal',
        'Charts' => 'Charts',
        'Tools' => 'Tools',
        'Miscellaneous' => 'Miscellaneous',
    ),
    'LBL_ADDING_DASHLET' => 'Adding MintHCM Dashlet...',
    'LBL_ADDED_DASHLET' => 'MintHCM Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this MintHCM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Removing MintHCM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'MintHCM Dashlet Removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filters',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Only My Items',
    'LBL_DASHLET_CONFIGURE_MY_FAVORITES' => 'Only My Favorites',
    'LBL_DASHLET_CONFIGURE_MY_SUBORDINATES' => 'Only My Subordinates Items',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Title',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Display Rows',
    'LBL_DASHLET_DELETE' => 'Delete MintHCM Dashlet',
    'LBL_DASHLET_REFRESH' => 'Refresh MintHCM Dashlet',
    'LBL_DASHLET_EDIT' => 'Edit MintHCM Dashlet',
    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My MintHCM',
    'LBL_RECRUITMENT_DASHBOARD' => 'Recruitment',
    'LBL_HR_MANAGER_DASHBOARD' => 'HR - Manager',
    'LBL_MY_TEAM_DASHBOARD' => 'My Team',
    'LBL_MY_RECORDS_DASHBOARD' => 'My Records',
    'LBL_HR_ACTIONS_DASHBOARD' => 'HR Actions',
    'LBL_SPENT_TIME_DASHBOARD' => 'Spent Time',
    'LBL_CLOSE_SITEMAP' => 'Close',
    'LBL_SEARCH' => 'Search',
    'LBL_CLEAR' => 'Clear',
    'LBL_BASIC_CHARTS' => 'Basic Charts',
    'LBL_DASHLET_SEARCH' => 'Find MintHCM Dashlet',
//ABOUT page
    'LBL_VERSION' => 'Version',
    'LBL_BUILD' => 'Build',
    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - providers of CE framework',
    'LBL_DASHLET_TITLE' => 'My Sites',
    'LBL_DASHLET_OPT_TITLE' => 'Title',
    'LBL_DASHLET_INCORRECT_URL' => 'Incorrect website location is specified',
    'LBL_DASHLET_OPT_URL' => 'Website Location',
    'LBL_DASHLET_OPT_HEIGHT' => 'Dashlet Height (in pixels)',
    'LBL_DASHLET_SUITE_NEWS' => 'MintHCM News',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Discover MintHCM',
    'LBL_BASIC_SEARCH' => 'Quick Filter' /* for 508 compliance fix */,
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter' /* for 508 compliance fix */,
    'LBL_TOUR_HOME' => 'Home Icon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Quickly get back to your Home Page dashboard in one click.',
    'LBL_TOUR_MODULES' => 'Modules',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'All your important modules are here.',
    'LBL_TOUR_MORE' => 'More Modules',
    'LBL_TOUR_MORE_DESCRIPTION' => 'The rest of your modules are here.',
    'LBL_TOUR_SEARCH' => 'Full Text Search',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Search just got a whole lot better.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notifications',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'MintHCM application notifications would go here.',
    'LBL_TOUR_PROFILE' => 'Profile',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Access profile, settings and logout.',
    'LBL_TOUR_QUICKCREATE' => 'Quick Create',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Quickly create records without losing your place.',
    'LBL_TOUR_FOOTER' => 'Collapsible Footer',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Easily expand and collapse the footer.',
    'LBL_TOUR_CUSTOM' => 'Custom Apps',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Custom integrations would go here.',
    'LBL_TOUR_BRAND' => 'Your Brand',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Your logo goes here. You can mouse over for more info.',
    'LBL_TOUR_WELCOME' => 'Welcome to MintHCM',
    'LBL_TOUR_WATCH' => 'Watch What\'s New in MintHCM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">New simplifed navigation bar</li><li class="icon-ok">New collapsible footer</li><li class="icon-ok">Improved Search</li><li class="icon-ok">Updated actions menu</li></ul><p>and much more!</p>',
    'LBL_TOUR_VISIT' => 'For more information please visit our application',
    'LBL_TOUR_DONE' => 'You\'re Done!',
    'LBL_TOUR_REFERENCE_1' => 'You can always reference our',
    'LBL_TOUR_REFERENCE_2' => 'through the "Support Forum" link under the profile tab.',
    'LNK_TOUR_DOCUMENTATION' => 'documentation',
    'LBL_TOUR_CALENDAR_URL_1' => 'Do you share your MintHCM calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorized publishing of your calendar.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Retrieve your new shared calendar URL.',
    'LBL_ABOUT' => 'About',
    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',
    'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
    'LBL_ABOUT_TITLE' => 'About OmniHR - Revolutionizing Human Resource Management',
    'LBL_ABOUT_CHAPTER_1' => 'Welcome to OmniHR, where innovation meets efficiency in the world of Human Resource Management. We take pride in presenting a comprehensive solution that transcends traditional HR boundaries, seamlessly integrating all seven core HR functions to empower your organization\'s success.',
    'LBL_ABOUT_CHAPTER_2_TITLE' => 'Our Vision',
    'LBL_ABOUT_CHAPTER_2' => 'At OmniHR, we envision a future where managing human capital is not just a task but a strategic advantage. We strive to revolutionize HR processes, making them agile, insightful, and aligned with your organization\'s goals.',
    'LBL_ABOUT_CHAPTER_3_TITLE' => 'The OmniHR Advantage',
    'LBL_ABOUT_CHAPTER_3' => '<strong>All-Inclusive HR Solutions</strong><br/><br/>OmniHR\'s Human Resource Management System encompasses the entire HR spectrum, covering seven essential functions:<br/><br/>1. Recruitment & Selection: Streamline your hiring process with advanced tools that simplify talent acquisition and selection.<br/>2. Training & Development: Nurture talent and cultivate a culture of continuous learning with our intuitive training and development modules.<br/>3. Performance Management: Evaluate and enhance employee performance with data-driven insights, fostering a high-performance culture.<br/>4. Employee Relations: Strengthen employee engagement and foster a positive work environment through effective communication and conflict resolution tools.<br/>5. Employment Law & Compliance: Stay ahead of regulatory changes with OmniHR\'s compliance features, ensuring your HR practices align with the latest legal standards.<br/>6. Compensation & Benefits: Optimize your compensation strategy and benefits administration to attract and retain top talent.<br/>7. Administration and Payroll: Simplify administrative tasks and ensure accurate payroll processing with our integrated system.<br/><br/>',
    'LBL_ABOUT_CHAPTER_4_TITLE' => 'Intelligent Automation',
    'LBL_ABOUT_CHAPTER_4' => 'OmniHR leverages cutting-edge technology to automate routine tasks, allowing your HR team to focus on strategic initiatives. From applicant tracking to payroll processing, our intelligent automation streamlines processes and reduces manual effort.',
    'LBL_ABOUT_CHAPTER_5_TITLE' => 'Customizable and Scalable',
    'LBL_ABOUT_CHAPTER_5' => 'Every organization is unique, and OmniHR recognizes that. Our HRMS is highly customizable to adapt to your specific needs. As your organization grows, our scalable solution grows with you, ensuring continued efficiency and effectiveness.',
    'LBL_ABOUT_CHAPTER_6_TITLE' => 'Data-Driven Insights',
    'LBL_ABOUT_CHAPTER_6' => 'Make informed decisions with OmniHR\'s robust analytics and reporting capabilities. Gain valuable insights into your workforce, helping you identify trends, forecast needs, and drive strategic HR initiatives.',
    'LBL_ABOUT_CHAPTER_7_TITLE' => 'Join the OmniHR Community',
    'LBL_ABOUT_CHAPTER_7' => 'Embrace the future of Human Resource Management with OmniHR. Join a community of forward-thinking organizations that prioritize their most valuable asset - their people. Let OmniHR be your partner in building a thriving, engaged, and high-performing workforce.',
    'LBL_ABOUT_FINISH' => 'Discover the power of comprehensive HR solutions. Experience OmniHR today.',
    'LBL_SAVE_BUTTON' => 'Save',
    'LBL_DELETE_BUTTON' => 'Delete',
    'LBL_APPLY_BUTTON' => 'Apply',
    'LBL_SEND_INVITES' => 'Save & Send Invites',
    'LBL_CANCEL_BUTTON' => 'Cancel',
    'LBL_CLOSE_BUTTON' => 'Close',
    'LBL_CREATE_NEW_RECORD' => 'Create Activity',
    'LBL_CREATE_CALL' => 'Log Call',
    'LBL_CREATE_MEETING' => 'Schedule Meeting',
    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'Recurrence',
    'LBL_REPEAT_TYPE' => 'Repeat',
    'LBL_REPEAT_INTERVAL' => 'Every',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'After',
    'LBL_REPEAT_OCCURRENCES' => 'recurrences',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'On',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Number of recurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',
    //Events
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'View Event',
    'LBL_DATE' => 'Date: ',
    'LBL_DURATION' => 'Duration: ',
    'LBL_NAME' => 'Title: ',
    'LBL_HOUR_ABBREV' => 'hour',
    'LBL_HOURS_ABBREV' => 'hours',
    'LBL_MINSS_ABBREV' => 'minutes',
    'LBL_LOCATION' => 'Location:',
    'LBL_STATUS' => 'Status:',
    'LBL_DESCRIPTION' => 'Description: ',
    //End Events
    'LBL_ERR_DATE_ARE_NOT_EQUALS' => 'Dates are not equal',
    'LBL_CLOSE_PLAN' => 'Submit',
    'LBL_CLOSE_PLAN_CONFIRM' => 'Are you sure to submit this work schedule? You cannot rollback this operation.',
    'ERR_CLOSE_PLAN' => 'Work schedule can not be submitted due to breaks between work times.',
    'LBL_ERR_INVALID_START_TIME' => 'Work schedule can not start after 23:55',
    
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'An error has occurred while performing the search. Your query syntax might not be valid.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Unable to find the requested SearchEngine. Try performing the search again.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Failed to connect to the Elasticsearch server.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'An error internal to the Search has occurred.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'An unknown error has occurred while performing the search.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contact an administrator if the problem persists. More information available in the logs.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'No results matching your search criteria. Try broadening your search.',

    'LNK_TASK_VIEW' => 'View Task',
);
