<md-content class="md-padding" layout-xs="column" layout="row" style="background: #bbdefb;">
  <div flex-xs flex-gt-xs="35" layout="column"></div>
  <div flex-xs flex-gt-xs="30" layout="column">
    <md-card>
      <img ng-src="{{imagePath}}" class="md-card-image" alt="Washed Out">
      <md-card-title>
        <md-card-title-text>
          <strong class="md-headline" md-colors="{color:'primary'}">Iniciar sesión</strong>
        </md-card-title-text>
      </md-card-title>
      <md-card-content>
        <form layout="column" name="loginForm" ng-submit="auth.login()" novalidate dw-loading="signing-in">
          <md-input-container>
            <label>Matrícula o DNI</label>
            <input type="text" class="mdl-textfield__input" name="username" ng-model="auth.credentials.username" required />
            <div ng-messages="loginForm.username.$error" ng-show="loginForm.username.$dirty">
              <div ng-message="required">This is required!</div>
              <div ng-message="md-maxlength">That's too long!</div>
              <div ng-message="minlength">That's too short!</div>
            </div>
          </md-input-container>
          <md-input-container>
            <label>Contraseña</label>
            <input type="password" class="mdl-textfield__input" name="password" ng-model="auth.credentials.password" required />
          </md-input-container>
          <md-button class="md-raised md-accent" type="submit">Ingresar</md-button>
        </form>
      </md-card-content>
      <md-card-actions layout="row" layout-align="end center">
        <md-button class="md-primary" ng-href="{{passUrl}}">Recuperar contraseña</md-button>
      </md-card-actions>
    </md-card>
  </div>
</md-content>
<!--
<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

<p>
  <?php echo lang('login_identity_label', 'identity');?>
  <?php echo form_input($identity);?>
</p>

<p>
  <?php echo lang('login_password_label', 'password');?>
  <?php echo form_input($password);?>
</p>

<p>
  <?php echo lang('login_remember_label', 'remember');?>
  <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
</p>


<p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>-->