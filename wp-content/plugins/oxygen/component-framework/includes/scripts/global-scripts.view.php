<?php 
	
/**
 * Manage > Settings > Global Styles > Animate On Scroll
 *
 */ 
		
global $oxygen_toolbar;

?>

<?php $oxygen_toolbar->settings_breadcrumbs(	
						__('Scripts','oxygen'),
						__('Global Styles','oxygen'),
						'default-styles'); ?>

<div class='oxygen-control-row'>
	<div class='oxygen-control-wrapper'>
		<div class='oxygen-control'>
			<label class="oxygen-checkbox">
				<input type="checkbox"
					ng-true-value="'true'" 
					ng-false-value="''"
					ng-model="iframeScope.globalSettings.scripts['scroll_to_hash']"
					ng-change="iframeScope.loadOxygenScripts()">
				<div class='oxygen-checkbox-checkbox'
					ng-class="{'oxygen-checkbox-checkbox-active':iframeScope.globalSettings.scripts['scroll_to_hash']=='true'}">
					<?php _e("Smooth Scroll to Hash Links","oxygen") ?>
				</div>
			</label>
		</div>
	</div>
</div>

<div class='oxygen-control-row'
	ng-show="iframeScope.globalSettings.scripts['scroll_to_hash']=='true'">
	<?php $oxygen_toolbar->global_slider_measure_box_with_wrapper('global', "['scripts']['scroll_to_hash_time']", __('Scroll Time','oxygen'), 'ms', 0, 1000, "", 100); ?>
</div>

<div class='oxygen-control-row'
	ng-show="iframeScope.globalSettings.scripts['scroll_to_hash']=='true'">
	<?php $oxygen_toolbar->global_slider_measure_box_with_wrapper('global', "['scripts']['scroll_to_hash_offset']", __('Scroll Offset','oxygen'), 'px', 0, 1000, "", 100); ?>
</div>