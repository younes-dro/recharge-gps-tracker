<?php

$stargps_devices_management_log_api_response = sanitize_text_field( trim( get_option( 'stargps_devices_management_log_api_response' ) ) );


?>
<div>
	
<form method="post" action="<?php echo esc_url( get_site_url() . '/wp-admin/admin-post.php' ); ?>">
 <input type="hidden" name="action" value="stargps_device_management_save_settings">
 <input type="hidden" name="current_url" value="<?php echo esc_url( stargps_device_management_get_current_screen_url() ); ?>">   
<?php wp_nonce_field( 'stargps-device-management-settings-nonce', 'stargps_device_management_settings_nonce' ); ?>
  <table class="form-table" role="presentation">
	<tbody>        
	<tr>
		<th scope="row"><?php esc_html_e( 'Log API calls response (For debugging purpose)', 'stargps-devices-management' ); ?></th>
		<td> <fieldset>
		<input name="stargps_devices_management_log_api_response" type="checkbox" id="stargps_devices_management_log_api_response" 
		<?php
		if ( $stargps_devices_management_log_api_response == true ) {
			echo esc_attr( 'checked="checked"' ); }
		?>
		 value="1">
		</fieldset></td>
	  </tr>
			
	</tbody>
  </table>
  <div class="bottom-btn">
	<button type="submit" name="settings_submit" value="stargps_submit" class="ets-submit ets-bg-green">
	  <?php esc_html_e( 'Save Settings', 'stargps-devices-management' ); ?>
	</button>
  </div>
</form>
</div>
