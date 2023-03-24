<?php

// Heading
$_['heading_title']                                     = 'Square';
$_['heading_title_transaction']                         = 'View Transaction #%s';

// Help
$_['help_total']                                        = 'The checkout total the order must reach before this payment method becomes active.';
$_['help_local_cron']                                   = 'Insert this command in your web server CRON tab. Set it up to run at least once per day.';
$_['help_remote_cron']                                  = 'Use this URL to set up a CRON task via a web-based CRON service. Set it up to run at least once per day.';
$_['help_recurring_status']                             = 'Activează pentru a permite plăți recurente periodice.<br />NOTE: De asemenea, trebuie să configurezi o activitate CRON zilnică.';
$_['help_cron_email']                                   = 'Un rezumat al activității recurente va fi trimis la acest e-mail după finalizare.';
$_['help_cron_email_status']                            = 'Enable to receive a summary after every CRON task.';
$_['help_notify_recurring_success']                     = 'Anunță clienții cu privire la tranzacțiile recurente reușite.';
$_['help_notify_recurring_fail']                        = 'Anunță clienții despre tranzacțiile recurente eșuate.';

// Tab
$_['tab_setting']                                       = 'Settings';
$_['tab_transaction']                                   = 'Transactions';
$_['tab_cron']                                          = 'CRON';
$_['tab_recurring']                                     = 'Plăți Recurente';

// Text
$_['text_access_token_expires_label']                   = 'Access token expires';
$_['text_access_token_expires_placeholder']             = 'Not setup';
$_['text_acknowledge_cron']                             = 'I confirm that I have set up an automated CRON task using one of the methods above.';
$_['text_admin_notifications']                          = 'Admin notifications';
$_['text_authorize_label']                              = 'Authorize';
$_['text_canceled_success']                             = 'Success: You have succesfully canceled this payment!';
$_['text_capture']                                      = 'Capture';
$_['text_client_id_help']                               = 'Get this from the Manage Application page on Square';
$_['text_client_id_label']                              = 'Square Application ID';
$_['text_client_id_placeholder']                        = 'Square Application ID';
$_['text_client_secret_help']                           = 'Get this from the Manage Application page on Square';
$_['text_client_secret_label']                          = 'OAuth Application Secret';
$_['text_client_secret_placeholder']                    = 'OAuth Application Secret';
$_['text_confirm_action']                               = 'Are you sure?';
$_['text_confirm_cancel']                               = 'Ești sigur că dorești să anulezi plățile recurente?';
$_['text_confirm_capture']                              = 'You are about to capture the following amount: <strong>%s</strong>. Click OK to proceed.';
$_['text_confirm_refund']                               = 'Please provide a reason for the refund:';
$_['text_confirm_void']                                 = 'You are about to void the following amount: <strong>%s</strong>. Click OK to proceed.';
$_['text_connected']                                    = 'Connected';
$_['text_connected_info']                               = "Reconnect if you want to switch accounts or have manually revoked this extension's access from the Square App console. Manually refresh the access token if it has been close to 45 days since the last sale or reconnect.";
$_['text_connection_section']                           = 'Square Connection';
$_['text_connection_success']                           = 'Successfully connected!';
$_['text_cron_email']                                   = 'Send task summary to this e-mail:';
$_['text_cron_email_status']                            = 'Send e-mail summary:';
$_['text_customer_notifications']                       = 'Customer notifications';
$_['text_debug_disabled']                               = 'Disabled'; 
$_['text_debug_enabled']                                = 'Enabled'; 
$_['text_debug_help']                                   = 'API requests and responses will be logged in the OpenCart error log. Use this for only for debugging and development purposes.';
$_['text_debug_label']                                  = 'Debug Logging';
$_['text_delay_capture_help']                           = 'Only authorize transactions or perform charges automatically';
$_['text_delay_capture_label']                          = 'Transaction type';
$_['text_disabled_connect_help_text']                   = 'The client id and secret are required fields.';
$_['text_edit_heading']                                 = 'Edit Square';
$_['text_enable_sandbox_help']                          = 'Enable sandbox mode for testing transactions';
$_['text_enable_sandbox_label']                         = 'Enable sandbox mode';
$_['text_executables']                                  = 'CRON execution methods';
$_['text_extension']                                    = 'Extensii';
$_['text_extension_status']                             = 'Extension status';
$_['text_extension_status_disabled']                    = 'Disabled'; 
$_['text_extension_status_enabled']                     = 'Enabled'; 
$_['text_extension_status_help']                        = 'Enable or disable the payment method'; 
$_['text_insert_amount']                                = 'Please insert the refund amount. Maximum: %s in %s:';
$_['text_loading']                                      = 'Loading data... Please wait...';
$_['text_loading_short']                                = 'Please wait...';
$_['text_local_cron']                                   = 'Method #1 - CRON Task:';
$_['text_location_error']                               = 'There was an error when trying to sync locations and token: %s';
$_['text_location_help']                                = 'Select which configured Square location to be used for transactions. Has to have card processing capabilities enabled.';
$_['text_location_label']                               = 'Location';
$_['text_manage']                                       = 'Credit Card Transaction (Square)';
$_['text_manage_tooltip']                               = 'See details / Capture / Void / Refund';
$_['text_merchant_info_section_heading']                = 'Informații Comerciant';
$_['text_merchant_name_label']                          = 'Merchant name';
$_['text_merchant_name_placeholder']                    = 'Not setup';
$_['text_no_appropriate_locations_warning']             = 'There are no locations capable of online card processing setup in your Square account.';
$_['text_no_location_selected_warning']                 = 'There is no selected location.';
$_['text_no_locations_label']                           = 'No valid locations';
$_['text_no_transactions']                              = 'No transactions have been logged yet.';
$_['text_not_connected']                                = 'Not connected';
$_['text_not_connected_info']                           = 'By clicking this button you will connect this module to your Square account and activate the service.';
$_['text_notification_ssl']                             = 'Make sure you have SSL enabled on your checkout page. Otherwise, the extension will not work.';
$_['text_notify_recurring_fail']                        = 'Tranzacție Recurentă Eșuată:';
$_['text_notify_recurring_success']                     = 'Tranzacție Recurentă Reușită:';
$_['text_ok']                                           = 'OK';
$_['text_order_history_cancel']                         = 'Un administrator a anulat plățile tale recurente. Cardul tau nu va mai fi debitat.';
$_['text_payment_method_name_help']                     = 'Checkout payment method name';
$_['text_payment_method_name_label']                    = 'Payment method name';
$_['text_payment_method_name_placeholder']              = 'Credit / Debit Card';
$_['text_recurring_info']                               = 'Te rugam asigură-te că, configurezi o activitate CRON zilnică folosind una dintre metodele de mai jos. Joburile CRON te ajută cu:<br /><br />&bull; Actualizarea automată a token-ului tău de acces API<br />&bull; Procesarea tranzacțiilor recurente';
$_['text_recurring_status']                             = 'Starea plăților recurente:';
$_['text_redirect_uri_help']                            = 'Paste this link into the Redirect URI field under Manage Application/oAuth';
$_['text_redirect_uri_label']                           = 'Square OAuth Redirect URL';
$_['text_refresh_access_token_success']                 = 'Successfully refreshed the connection to your Square account.'; 
$_['text_refresh_token']                                = 'Re-create token';
$_['text_refund']                                       = 'Refund';
$_['text_refund_details']                               = 'Refund details';
$_['text_refunded_amount']                              = 'Refunded: %s. Status of the refund: %s. Reason for the refund: %s';
$_['text_refunds']                                      = 'Refunds (%s)';
$_['text_remote_cron']                                  = 'Method #2 - Remote CRON:';
$_['text_sale_label']                                   = 'Sale';
$_['text_sandbox_access_token_help']                    = 'Get this from the Manage Application page on  Square';
$_['text_sandbox_access_token_label']                   = 'Sandbox Access Token';
$_['text_sandbox_access_token_placeholder']             = 'Sandbox Access Token';
$_['text_sandbox_client_id_help']                       = 'Get this from the Manage Application page on Square';
$_['text_sandbox_client_id_label']                      = 'Sandbox Application ID';
$_['text_sandbox_client_id_placeholder']                = 'Sandbox Application ID';
$_['text_sandbox_disabled_label']                       = 'Disabled'; 
$_['text_sandbox_enabled']                              = 'Sandbox mode is enabled! Transactions will appear to go through, but no charges will be carried out.';
$_['text_sandbox_enabled_label']                        = 'Enabled'; 
$_['text_sandbox_section_heading']                      = 'Square Sandbox Settings';
$_['text_select_location']                              = 'Select location';
$_['text_settings_section_heading']                     = 'Square Settings';
$_['text_squareup']                                     = '<a target="_BLANK" href="https://squareup.com"><img src="view/image/payment/squareup.png" alt="Square" title="Square" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_success']                                      = 'Success: You have modified Square payment module!';
$_['text_success_capture']                              = 'Transaction successfully captured!';
$_['text_success_refund']                               = 'Transaction successfully refunded!';
$_['text_success_void']                                 = 'Transaction successfully voided!';
$_['text_token_expired']                                = 'Your Square access token has expired! <a href="%s">Click here</a> to renew it now.';
$_['text_token_expiry_warning']                         = 'Your Square access token will expire on %s. <a href="%s">Click here</a> to renew it now.';
$_['text_token_revoked']                                = 'Your Square access token has expired or has been revoked! <a href="%s">Click here</a> to re-authorize the Square extension.';
$_['text_transaction_statuses']                         = 'Transaction Statuses';
$_['text_view']                                         = 'Vezi mai mult';
$_['text_void']                                         = 'Void';
$_['text_na']                                           = 'N/A';
$_['text_no_reason_provided']                           = 'Reason not provided.';

// Statuses
$_['squareup_status_comment_authorized']                = 'The card transaction has been authorized but not yet captured.';
$_['squareup_status_comment_captured']                  = 'The card transaction was authorized and subsequently captured (i.e., completed).';
$_['squareup_status_comment_voided']                    = 'The card transaction was authorized and subsequently voided (i.e., canceled).   ';
$_['squareup_status_comment_failed']                    = 'The card transaction failed.';

// Entry
$_['entry_total']                                       = 'Total';
$_['entry_geo_zone']                                    = 'Geo Zone';
$_['entry_sort_order']                                  = 'Ordine Sortare';
$_['entry_merchant']                                    = 'Merchant ID';
$_['entry_transaction_id']                              = 'Transaction ID';
$_['entry_order_id']                                    = 'Order ID';
$_['entry_partner_solution_id']                         = 'Partner Solution ID';
$_['entry_type']                                        = 'Transaction Type';
$_['entry_currency']                                    = 'Monedă';
$_['entry_amount']                                      = 'Amount';
$_['entry_browser']                                     = 'Customer User Agent';
$_['entry_ip']                                          = 'Customer IP';
$_['entry_date_created']                                = 'Date Created';
$_['entry_billing_address_company']                     = 'Billing Company';
$_['entry_billing_address_street']                      = 'Billing Street';
$_['entry_billing_address_city']                        = 'Billing City';
$_['entry_billing_address_postcode']                    = 'Billing ZIP';
$_['entry_billing_address_province']                    = 'Billing Province/State';
$_['entry_billing_address_country']                     = 'Billing Country';
$_['entry_status_authorized']                           = 'Authorized';
$_['entry_status_captured']                             = 'Captured';
$_['entry_status_voided']                               = 'Voided';
$_['entry_status_failed']                               = 'Failed';
$_['entry_setup_confirmation']                          = 'Setup confirmation:';

// Error
$_['error_permission']                                  = '<strong>Warning:</strong> You do not have permission to modify payment Square!';
$_['error_permission_recurring']                        = '<strong>Atenție:</strong> Nu ai permisiunea de a modifica plățile recurente!';
$_['error_transaction_missing']                         = 'Transaction not found!';
$_['error_no_ssl']                                      = '<strong>Warning:</strong> SSL is not enabled on your admin panel. Please enable it to finish your configuration.';
$_['error_user_rejected_connect_attempt']               = 'Connection attempt was canceled by the user.';
$_['error_possible_xss']                                = 'We detected a possible cross site attack and have terminated your connection attempt. Please verify your application ID and secret and try again using the buttons in the admin panel.';
$_['error_invalid_email']                               = 'The provided e-mail address is not valid!';
$_['error_cron_acknowledge']                            = 'Please confirm you have set up a CRON job.';
$_['error_client_id']                                   = 'The app client ID is a required field';
$_['error_client_secret']                               = 'The app client secret is a required field';
$_['error_sandbox_client_id']                           = 'The sandbox client ID is a required field when sandbox mode is enabled';
$_['error_sandbox_token']                               = 'The sandbox token is a required field when sandbox mode is enabled';
$_['error_no_location_selected']                        = 'The location is a required field';
$_['error_refresh_access_token']                        = "An error occurred when trying to refresh the extension's connection to your Square account. Please verify your application credentials and try again.";
$_['error_form']                                        = 'Please check the form for errors and try to save agian.';
$_['error_token']                                       = 'An error was encountered while refreshing the token: %s';
$_['error_no_refund']                                   = 'Refund failed.';

// Column
$_['column_transaction_id']                             = 'Transaction ID';
$_['column_order_id']                                   = 'Număr Comandă';
$_['column_customer']                                   = 'Customer';
$_['column_status']                                     = 'Stare';
$_['column_type']                                       = 'Type';
$_['column_amount']                                     = 'Valoare';
$_['column_ip']                                         = 'IP';
$_['column_date_created']                               = 'Date Created';
$_['column_action']                                     = 'Acțiune';
$_['column_refunds']                                    = 'Refunds';
$_['column_reason']                                     = 'Motiv';
$_['column_fee']                                        = 'Processing Fee';

// Button
$_['button_void']                                       = 'Nul';
$_['button_refund']                                     = 'Stornare';
$_['button_capture']                                    = 'Capture';
$_['button_connect']                                    = 'Connect';
$_['button_reconnect']                                  = 'Reconnect';
$_['button_refresh']                                    = 'Refresh token';
