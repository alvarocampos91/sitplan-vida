<md-content class="md-padding" layout-xs="column" layout="row" style="background: #bbdefb;">
	<div flex-xs flex-gt-xs="35" layout="column"></div>
	<div flex-xs flex-gt-xs="30" layout="column">
		<md-card>
			<md-card-header>
				<md-card-avatar>
					<img src="img/logo.svg"/>
				</md-card-avatar>
				<md-card-header-text>
					<span class="md-title"><?php echo lang('forgot_password_heading');?></span>
					<span class="md-subhead"><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></span>
				</md-card-header-text>
			</md-card-header>
			<md-card-title>
				<md-card-title-text>
					<strong class="md-headline" md-colors="{color:'primary'}"><?php echo lang('forgot_password_heading');?></strong>
				</md-card-title-text>
			</md-card-title>
			<md-card-content>
				<form layout="column" name="loginForm" ng-submit="auth.login()" novalidate dw-loading="signing-in">
					<md-input-container>
						<label><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label>
						<input type="email" class="mdl-textfield__input" name="identity" ng-model="auth.credentials.email" required />
					</md-input-container>
					<md-button class="md-raised md-accent" type="submit">Aceptar</md-button>
				</form>
			</md-card-content>
			<md-card-actions layout="row" layout-align="end center">
				<md-button class="md-primary" ng-href="{{loginUrl}}">Ingresar de nuevo</md-button>
			</md-card-actions>
		</md-card>
	</div>
</md-content>
