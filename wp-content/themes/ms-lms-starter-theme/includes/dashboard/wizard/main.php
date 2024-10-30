<?php

function masterstudy_starter_demo_import_page() {
	if ( function_exists( 'masterstudy_starter_fs_verify' ) && ! masterstudy_starter_fs_verify() ) {
		add_submenu_page(
			'masterstudy-starter-options',
			esc_html__( 'License Key', 'masterstudy_starter' ),
			esc_html__( 'License Key', 'masterstudy_starter' ),
			'manage_options',
			'masterstudy-starter-activation',
			'',
		);
	}
}

add_action( 'admin_menu', 'masterstudy_starter_demo_import_page' );

//Main template
function masterstudy_starter_demo_import_page_content() { ?>
	<div class="masterstudy-starter-wizard masterstudy-starter-wizard-inner">
		<div class="masterstudy-starter-wizard__navigation">
			<ul class="masterstudy-starter-wizard__navigation-progress-bar">
				<li class="progress-step-templates active"><span><em>1</em><i class="ms-lms-icon-check"></i></span> <?php echo esc_html__( 'Choose Template', 'masterstudy_starter' ); ?></li>
				<li class="progress-step-plugins"><span><em>2</em><i class="ms-lms-icon-check"></i></span> <?php echo esc_html__( 'Plugin installation', 'masterstudy_starter' ); ?></li>
				<li class="progress-step-demo-content"><span><em>3</em><i class="ms-lms-icon-check"></i></span> <?php echo esc_html__( 'Demo content import', 'masterstudy_starter' ); ?></li>
				<li class="progress-step-child-theme"><span><em>4</em><i class="ms-lms-icon-check"></i></span> <?php echo esc_html__( 'Child theme installation', 'masterstudy_starter' ); ?></li>
			</ul>
		</div>
		<div class="masterstudy-starter-wizard__wrapper">
			<?php load_template( MS_LMS_STARTER_THEME_DIR . '/includes/dashboard/wizard/templates/templates.php', true ); ?>
		</div>
	</div>
	<?php
}
