

<h1><img  class="stargps-devices-management-logo" src="<?php echo STARGPSDEVICESMANAGEMENT_PLUGIN_URL; ?>/assets/images/logo-medium.png" /><?php esc_html_e( 'API Devices', 'stargps-devices-management' ); ?></h1>
		<div id="stargps-devices-management-outer" class="skltbs-theme-light" data-skeletabs='{ "startIndex": 0 }'>
			<ul class="skltbs-tab-group">
				<li class="skltbs-tab-item">
				<button class="skltbs-tab" data-identity="devices" ><?php esc_html_e( 'Devices', 'stargps-devices-management' ); ?></button>
				</li>
				<li class="skltbs-tab-item">
				<button class="skltbs-tab" data-identity="api" ><?php esc_html_e( 'API', 'stargps-devices-management' ); ?></button>

				</li>
				<li class="skltbs-tab-item">
				<button class="skltbs-tab" data-identity="new_api" ><?php esc_html_e( 'New API', 'stargps-devices-management' ); ?></button>
				</li>
				<li class="skltbs-tab-item">
				<button class="skltbs-tab" data-identity="settings" ><?php esc_html_e( 'Settings', 'stargps-devices-management' ); ?>	
				</button>				
				</li>
				<li class="skltbs-tab-item">
				<button class="skltbs-tab" data-identity="logs" ><?php esc_html_e( 'Logs', 'stargps-devices-management' ); ?>	
				</button>
				</li>  
				<li class="skltbs-tab-item">
				<button class="skltbs-tab" data-identity="manuelle" ><?php esc_html_e( 'Recharge manuelle', 'stargps-devices-management' ); ?>	
				</button>
				</li>
			</ul>
			<div class="skltbs-panel-group">
				<div id="ets_stargps-devices-management_application_details" class="stargps-devices-management-tab-conetent skltbs-panel">
				<?php require_once STARGPSDEVICESMANAGEMENT_PLUGIN_DIR_PATH . 'admin/partials/pages/stargps_devices_management_devices.php'; ?>
				</div>     
				<div id="stargps-devices-management_api" class="stargps-devices-management-tab-conetent skltbs-panel wrap">
					<?php require_once STARGPSDEVICESMANAGEMENT_PLUGIN_DIR_PATH . 'admin/partials/pages/stargps_devices_management_api.php'; ?>
				</div>

				<div id='stargps-devices-management_new_api' class="stargps-devices-management-tab-conetent skltbs-panel">
				<?php require_once STARGPSDEVICESMANAGEMENT_PLUGIN_DIR_PATH . 'admin/partials/pages/stargps_devices_management_new_api.php'; ?>
				</div>
				<div id='stargps-devices-management_settings' class="stargps-devices-management-tab-conetent skltbs-panel">
				<?php require_once STARGPSDEVICESMANAGEMENT_PLUGIN_DIR_PATH . 'admin/partials/pages/stargps_devices_management_settings.php'; ?>
				</div>				
				<div id='stargps-devices-management_logs' class="stargps-devices-management-tab-conetent skltbs-panel">
				<?php require_once STARGPSDEVICESMANAGEMENT_PLUGIN_DIR_PATH . 'admin/partials/pages/stargps_devices_management_error_log.php'; ?>
				</div> 
				<div id='stargps-devices-management_manuelle' class="stargps-devices-management-tab-conetent skltbs-panel">
				<?php require_once STARGPSDEVICESMANAGEMENT_PLUGIN_DIR_PATH . 'admin/partials/pages/stargps_devices_management_manuelle.php'; ?>
				</div>                            
			</div>  
		</div>
