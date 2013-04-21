<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		window.jQuery || document.write('<script type="text/javascript" src="static/js/lib/jquery-1.9.1.min.js"><\/script>');
		window.angular || document.write('<script type="text/javascript" src="static/js/lib/angular-1.0.5.min.js"><\/script>');
		window.jQuery.fn.tooltip || document.write('<script type="text/javascript" src="static/js/lib/bootstrap-2.3.1.min.js"><\/script>');
	</script>
	<script src="static/js/app.js"></script>
	<script src="static/js/lib/angular-ui-bootstrap-tpls-0.2.0.min.js"></script>
	<script src="static/js/lib/markdown-js.js"></script>
	<script src="static/js/lib/json2.min.js"></script>
	<script src="static/js/lib/md5.js"></script>
	<script src="static/js/lib/gravtastic.js"></script>

	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
	<link href="static/css/flat-ui.css" rel="stylesheet">
	<!--<link href="static/css/cosmo.bootstrap.min.css" rel="stylesheet">-->
	<link href="static/css/app.css" rel="stylesheet">

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-40008557-1']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
</script>
</head>

<body ng-app="cvitae" ng-controller="CvitaeCtrl">
	<div id="fb-root"></div>
	<script>
		window.fbAsyncInit = CvitaeApp.fbAsyncInit;

		// Load the SDK Asynchronously
		(function(d){
			var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement('script'); js.id = id; js.async = true;
			js.src = "//connect.facebook.net/en_US/all.js";
			ref.parentNode.insertBefore(js, ref);
		}(document));
	  </script>
	<div id="menu-bar" class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
	<div class="container">
		<div class="row-fluid">
			<div class="span6">
				<h3 id="brand">cvitae</h3>
			</div>
			<div class="span6 button-wrapper align-right-not-stacked">
				<button type="submit" class="btn btn-large btn-primary" ng-show="editMode" ng-click="save()" form="editor">Guardar</button><button type="button" class="btn btn-large btn-info" ng-click="editMode = !editMode" ng-show="editMode"><i class="icon-search icon-white"></i> Vista previa</button><button class="btn btn-large btn-info" ng-click="editMode = !editMode" ng-show="!editMode"><i class="icon-pencil icon-white"></i> Vista de edición</button><button class="btn btn-large btn-danger" ng-click="clear()"><i class="icon-remove icon-white"></i> Borrar</button>
			</div>
		</div>
	</div>
	</div>
	</div>

	<div class="container">
		<form id="editor" class="form-horizontal dialog-closeable hide" ng-show="editMode" ng-submit="save()">
			<fieldset>
				<legend>Información personal</legend>

				<div class="control-group">
					<label class="control-label" for="first-name-input">Nombre</label>
					<div class="controls">
						<input type="text" class="input-xlarge" name="first-name" id="first-name-input" ng-model="cvitae.personal.firstName" required="required">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="last-name-input">Apellido</label>
					<div class="controls">
						<input type="text" class="input-xlarge" name="last-name" id="last-name-input" ng-model="cvitae.personal.lastName" required="required">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="date-of-birth-input">Fecha de nacimiento</label>
					<div class="controls">
						<input type="text" class="input-medium" name="date-of-birth" name="date-of-birth-input" ng-model="cvitae.personal.dateOfBirth" required="required" placeholder="aaaa-mm-dd" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" title="Año (4) - Mes (2) - Día (2)">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="email-input">Correo electrónico</label>
					<div class="controls">
						<input type="email" class="input-xlarge" name="email" name="email-input" ng-model="cvitae.personal.email" required="required">
						<span class="help-inline">Utilizaremos <a href="http://gravatar.com">Gravatar</a> para desplegar tu avatar. Si aún no tienes uno, <a ng-href="http://gravatar.com/site/signup">¡obtenlo ahora!</a></span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="address-input">Dirección</label>
					<div class="controls">
						<input type="text" class="input-xxlarge" placeholder="Calle, número interior y/o exterior, colonia, código postal" name="address" id="address-input" ng-model="cvitae.personal.address" required="required">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="district-input">Delegación</label>
					<div class="controls">
						<select ng-options="key as value.label for (key, value) in catalogs.boroughs" ng-model="cvitae.personal.borough" required="required"></select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="state-input">Estado</label>
					<div class="controls">
						<select ng-options="key as value.label for (key, value) in catalogs.states" ng-model="cvitae.personal.state" required="required"></select>
					</div>
				</div>

				<div class="control-group" ng-controller="PhoneCtrl">
					<label class="control-label" for="state-input">Teléfono</label>
					<div class="controls list-wrapper">
						<div class="list-items palette-clouds" ng-show="cvitae.personal.phones.length">
							<div ng-repeat="phone in cvitae.personal.phones" class="list-item clearfix">
								<button class="btn btn-danger pull-right close-button" type="button" ng-click="remove(phone.id)"><i class="icon-remove icon-white"></i></button>
								<div>
									<input type="text" ng-model="phone.number" required="required">
									<select ng-options="key as value.label for (key, value) in catalogs.phoneTypes" ng-model="phone.type" required="required"></select>
								</div>
							</div>
						</div>
						<button class="btn btn-primary btn-block list-action" ng-class="{'list-empty': !cvitae.personal.phones.length}" type="button" ng-click="add()"><i class="icon-plus icon-white"></i> Teléfono</button>
					</div>
				</div>
			</fieldset>

			<fieldset ng-controller="EducationCtrl">
				<legend>Formación académica</legend>

				<div class="education-wrapper list-wrapper">
					<div class="list-items palette-clouds" ng-show="cvitae.education.length">
						<div ng-repeat="education in cvitae.education" class="list-item">
							<button class="btn btn-danger pull-right close-button" type="button" ng-click="remove(education.id)"><i class="icon-remove icon-white"></i></button>

							<div class="control-group">
								<label class="control-label" for="education-institution-{{education.id}}-input">Institución</label>
								<div class="controls">
									<input type="text" class="input-xxlarge" ng-model="education.institution" id="education-institution-{{education.id}}-input" required="required">
									<button type="button" class="btn" ng-show="education.school == null" ng-click="addSchool(education.id)"><i class="icon-plus icon-white"></i> Escuela</button>
								</div>
							</div>

							<div class="control-group" ng-show="education.school != null">
								<label class="control-label" for="education-school-{{education.id}}-input">Escuela</label>
								<div class="controls">
									<input type="text" class="input-xxlarge" ng-model="education.school" id="education-school-{{education.id}}-input">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="education-start-date-{{education.id}}-input">Periodo</label>
								<div class="controls">
									<input type="text" class="input-small" ng-model="education.startDate" id="education-start-date-{{education.id}}-input" required="required" placeholder="Inicio" pattern="(1|2)[0-9]{3}" title="Año (cuatro dígitos)">
									<button type="button" class="btn" ng-show="education.endDate == null" ng-click="addEndDate(education.id)"><i class="icon-plus icon-white"></i> Fin</button>
									<span ng-show="education.endDate != null">-</span>
									<input type="text" class="input-small" ng-model="education.endDate" ng-show="education.endDate != null" placeholder="Fin" pattern="(1|2)[0-9]{3}" title="Año (cuatro dígitos)">

									<label class="checkboxx"><input type="checkbox" ng-model="employment.current"> Actual</label>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="education-degree-{{education.id}}-input">Título</label>
								<div class="controls">
									<input type="text" class="input-xxlarge" ng-model="education.degree" id="education-degree-{{education.id}}-input" required="required">
								</div>
							</div>
						</div>
					</div>

					<button class="btn btn-primary btn-block list-action" ng-class="{'list-empty': !cvitae.education.length}" type="button" ng-click="add()"><i class="icon-plus icon-white"></i> Institución</button>
				</div>
			</fieldset>

			<fieldset ng-controller="EmploymentCtrl">
				<legend>Desarrollo profesional</legend>

				<div class="employment-wrapper list-wrapper">
					<div class="list-items palette-clouds" ng-show="cvitae.employment.length">
						<div ng-repeat="employment in cvitae.employment" class="list-item">
							<button class="btn btn-danger pull-right close-button" type="button" ng-click="remove(employment.id)"><i class="icon-remove icon-white"></i></button>

							<div class="control-group">
								<label class="control-label" for="employment-company-{{employment.id}}-input">Empresa</label>
								<div class="controls">
									<input type="text" class="input-xxlarge" ng-model="employment.company" id="employment-company-{{employment.id}}-input" required="required">
									<button type="button" class="btn" ng-show="employment.department == null" ng-click="addDepartment(employment)"><i class="icon-plus icon-white"></i> Área</button>
								</div>
							</div>

							<div class="control-group" ng-show="employment.department != null">
								<label class="control-label" for="employment-department-{{employment.id}}-input">Área</label>
								<div class="controls">
									<input type="text" class="input-xxlarge" ng-model="employment.department" id="employment-department-{{employment.id}}-input" placeholder="Departamento, gerencia, jefatura, etc.">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="employment-start-date-{{employment.id}}-input">Periodo</label>
								<div class="controls">
									<input type="text" class="input-small" ng-model="employment.startDate" id="employment-start-date-{{employment.id}}-input" required="required" placeholder="Inicio" pattern="(1|2)[0-9]{3}" title="Año (cuatro dígitos)">
									<button type="button" class="btn" ng-show="employment.endDate == null" ng-click="addEndDate(employment.id)" pattern="(1|2)[0-9]{3}" title="Año (cuatro dígitos)"><i class="icon-plus icon-white"></i> Fin</button>
									<span ng-show="employment.endDate != null">-</span>
									<input type="text" class="input-small" ng-model="employment.endDate" ng-show="employment.endDate != null" placeholder="Fin" pattern="(1|2)[0-9]{3}" title="Año (cuatro dígitos)">

									<label class="checkboxx"><input type="checkbox" ng-model="employment.current"> Actual</label>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="employment-position-{{employment.id}}-input">Puesto</label>
								<div class="controls">
									<input type="text" class="input-xxlarge" ng-model="employment.position" id="employment-position-{{employment.id}}-input" required="required">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="employment-position-{{employment.id}}-input">Descripción</label>
								<div class="controls">
									<textarea class="input-xxlarge" ng-model="employment.description" id="employment-description-{{employment.id}}-input" placeholder="Actividades realizadas, responsabilidades, aportaciones y logros"></textarea>
								</div>
							</div>
						</div>
					</div>

					<button class="btn btn-primary btn-block list-action" ng-class="{'list-empty': !cvitae.employment.length}" type="button" ng-click="add()"><i class="icon-plus icon-white"></i> Empleo</button>
				</div>
			</fieldset>

			<fieldset>
				<legend>Información complementaria</legend>

				<div class="control-group" ng-controller="LanguageCtrl">
					<label class="control-label" for="state-input">Idiomas</label>
					<div class="controls list-wrapper">
						<div class="list-items palette-clouds" ng-show="cvitae.complementary.languages.length">
							<div ng-repeat="language in cvitae.complementary.languages" class="list-item clearfix">
								<button class="btn btn-danger pull-right close-button" type="button" ng-click="remove(language.id)"><i class="icon-remove icon-white"></i></button>
								<div>
									<input type="text" ng-model="language.name" typeahead="lang for lang in catalogs.languages | filter:$viewValue" placeholder="Idioma" required="required">
									<select ng-options="value.key as value.label for value in catalogs.levels | orderBy:'sort'" ng-model="language.level"></select>
								</div>
							</div>
						</div>
						<button class="btn btn-primary btn-block list-action" ng-class="{'list-empty': !cvitae.complementary.languages.length}" type="button" ng-click="add()"><i class="icon-plus icon-white"></i> Idioma</button>
					</div>
				</div>

				<div class="control-group" ng-controller="UtilityCtrl">
					<label class="control-label" for="state-input">Paquetería</label>
					<div class="controls list-wrapper">
						<div class="list-items palette-clouds" ng-show="cvitae.complementary.utilities.length">
							<div ng-repeat="utility in cvitae.complementary.utilities" class="list-item clearfix">
								<button class="btn btn-danger pull-right close-button" type="button" ng-click="remove(utility.id)"><i class="icon-remove icon-white"></i></button>
								<div>
									<input type="text" ng-model="utility.name" typeahead="utility for utility in catalogs.utilities | filter:$viewValue" placeholder="Nombre" required="required">
									<select ng-options="value.key as value.label for value in catalogs.levels | orderBy:'sort'" ng-model="utility.level"></select>
								</div>
							</div>
						</div>
						<button class="btn btn-primary btn-block list-action" ng-class="{'list-empty': !cvitae.complementary.utilities.length}" type="button" ng-click="add()"><i class="icon-plus icon-white"></i> Paquetería</button>
					</div>
				</div>

				<div class="control-group" ng-controller="TechnologyCtrl">
					<label class="control-label" for="state-input">Tecnología</label>
					<div class="controls list-wrapper">
						<div class="list-items palette-clouds" ng-show="cvitae.complementary.technologies.length">
							<div ng-repeat="technology in cvitae.complementary.technologies" class="list-item clearfix">
								<button class="btn btn-danger pull-right close-button" type="button" ng-click="remove(technology.id)"><i class="icon-remove icon-white"></i></button>
								<div>
									<input type="text" ng-model="technology.name" typeahead="technology for technology in catalogs.technologies | filter:$viewValue" placeholder="Nombre" required="required">
									<select ng-options="value.key as value.label for value in catalogs.levels | orderBy:'sort'" ng-model="technology.level"></select>
								</div>
							</div>
						</div>
						<button class="btn btn-primary btn-block list-action" ng-class="{'list-empty': !cvitae.complementary.technologies.length}" type="button" ng-click="add()"><i class="icon-plus icon-white"></i> Tecnología</button>
					</div>
				</div>
			</fieldset>
		</form>

		<div id="preview" class="dialog-closeable" ng-show="!editMode">
			<div class="personal-wrapper">
				<h2>Información <span class="second-part">personal</span></h2>

				<div class="row-fluid">
					<div class="span3 align-right-not-stacked">
						<img class="gravatar" ng-src="{{ cvitae.personal.email | gravtastic }}">
					</div>
					<div class="span9">
						<div class="personal-name-section personal-section"><!-- TODO: add a formatter -->
							<span class="personal-first-name" ng-bind="cvitae.personal.firstName"></span> 
							<span class="personal-last-name" ng-bind="cvitae.personal.lastName"></span>
						</div>

						<div class="personal-address-section personal-section">
							<div class="personal-address" ng-bind="cvitae.personal.address"></div>
							<div class="personal-borough" ng-bind="cvitae.personal.borough.label"></div><!-- TODO: add a formatter -->
							<div class="personal-state" ng-bind="cvitae.personal.state.label"></div>
						</div>

						<div class="personal-contact-section personal-section">
							<div class="personal-email">
								<span class="personal-contact-type">Correo</span>
								<span ng-bind="cvitae.personal.email"></span>
							</div>
							<div ng-repeat="phone in cvitae.personal.phones">
								<span class="personal-contact-type" ng-bind="catalogs.phoneTypes[phone.type].label"></span>
								<a ng-href="tel:{{phone.number}}" ng-bind="phone.number"></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="education-wrapper">
				<h2>Formación <span class="second-part">académica</span></h2>

				<div>
					<div class="row-fluid education-section" ng-repeat="education in cvitae.education | orderBy:'startDate':true">
						<div class="span3 align-right-not-stacked">
							<div class="year-interval">{{ education.startDate | interval:education.endDate }}</div>
							<span class="label label-info" ng-show="education.current">Actual</span>
						</div>

						<div class="span9">
							<div ng-bind="education.institution"></div>
							<div ng-bind="education.school"></div>
							<div ng-bind="education.degree"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="employment-wrapper">
				<h2>Desarrollo <span class="second-part">profesional</span></h2>

				<div>
					<div class="row-fluid employment-section" ng-repeat="employment in cvitae.employment | orderBy:'startDate':true">
						<div class="span3 align-right-not-stacked">
							<div class="year-interval">{{ employment.startDate | interval:employment.endDate }}</div>
							<span class="label label-info" ng-show="employment.current">Actual</span>
						</div>

						<div class="span9">
							<div ng-bind="employment.company"></div>
							<div ng-bind="employment.department"></div>
							<div ng-bind="employment.position"></div>
							<div ng-bind-html-unsafe="employment.description | markdown"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="complementary-wrapper">
				<h2>Información <span class="second-part">complementaria</span></h2>

				<div class="row-fluid">
					<div class="span9 offset3"><h3>Idiomas</h3></div>
				</div>

				<div>
					<div class="row-fluid complementary-section" ng-repeat="language in cvitae.complementary.languages | orderBy:'language.level.sort':true">
						<div class="span3 align-right-not-stacked"><span class="label level" ng-class="language.level">{{ language.level }}</span></div>
						<div class="span9">{{ language.name }}</div>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span9 offset3"><h3>Paquetería</h3></div>
				</div>

				<div>
					<div class="row-fluid complementary-section" ng-repeat="utility in cvitae.complementary.utilities | orderBy:'utility.level.sort':true">
						<div class="span3 align-right-not-stacked"><span class="label level" ng-class="utility.level">{{ utility.level }}</span></div>
						<div class="span9">{{ utility.name }}</div>
					</div>
				</div>
			</div>
		</div>

		<div id="error-dialog" class="row-fluid hidee">
		<div class="span6 offset3">
			<div id="local-storage-error" class="hide">
				<div class="dialog palette-clouds">
					<h3>Error: localStorage no soportado.</h3>
					<p>Por el momento, almacenamos los datos de tu <span class="cvitae-brand">cvitae</span> en tu propio navegador. Desafortunadamente, parece que el tuyo no soporta esta característica.</p>
					<p><a href="http://browsehappy.com/?locale=es" target="_blank">¡Obtén un navegador más actualizado aquí!</a></p>

					<button type="button" class="btn btn-primary btn-block" ng-click="closeDialog()">Cerrar</button>
				</div>
			</div>

			<div id="login-error">
				<div class="dialog palette-clouds">
					<h3>¡Bienvenido!</h3>
					<p><span class="cvitae-brand">cvitae</span> es una herramienta para generar tu currículum vitae. En línea. Fácil. Rápido. Gratis.</p>
					<p>
						Te recomendamos iniciar sesión con Facebook para obtener tus datos inmediatamente.
						<!--Por el momento no almacenamos tus datos.--> Si decides no hacerlo, puedes capturar tu información manualmente.
					</p>

					<button type="button" class="btn btn-info btn-block" ng-click="fbGetLoginStatus()">Iniciar sesión con Facebook</button>
					<button type="button" class="btn btn-block" ng-click="closeDialog()">Capturar información manualmente</button>
				</div>
			</div>
		</div>
		</div>

		<div id="footer" class="palette-clouds clearfix">
			<p class="pull-left">Generado con <b>cvitae</b>.</p>
			<p class="pull-right"><a>cvitae.com.mx</a></p>
		</div>
	</div>
</body>
</html>