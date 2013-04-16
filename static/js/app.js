var CvitaeApp = {
	'cvitae': {
		'personal': {
			'firstName': 		null,
			'lastName': 		null,
			'dateOfBirth': 		null,
			'email': 			null,
			'address': 			null,
			'borough': 			null,
			'state': 			null,

			'phones': []
		},

		'education': [
			{
				'id': 			1,
				'startDate': 	null,
				'endDate': 		null,
				'institution': 	null,
				'school': 		null,
				'degree': 		null
			}
		],

		'employment': [
			{
				'id': 			1,
				'startDate': 	null,
				'endDate': 		null,
				'current': 		false,
				'company': 		null,
				'department': 	null,
				'position': 	null,
				'description': 	''
			}
		],

		'complementary': {
			'languages': [
				{
					'id': 			1,
					'name': 		'',
					'level': 		'basic'
				}
			],

			'utilities': [
				{
					'id': 			1,
					'name': 		'',
					'level': 		'basic'
				}
			],

			'technologies': [
				{
					'id': 			1,
					'name': 		'',
					'level': 		'basic'
				}
			]
		}
	},

	'catalogs': {
		'boroughs': {
			'alvaro-obregon' : 		{ 'id': 1, 'label': 'Álvaro Obregón' },
			'azcapotzalco': 		{ 'id': 2, 'label': 'Azcapotzalco' },
			'benito-juarez': 		{ 'id': 3, 'label': 'Benito Juárez' },
			'coyoacan': 			{ 'id': 4, 'label': 'Coyoacán' },
			'cuajimalpa': 			{ 'id': 5, 'label': 'Cuajimalpa' },
			'cuauhtemoc': 			{ 'id': 6, 'label': 'Cuauhtémoc' },
			'gustavo-a-madero': 	{ 'id': 7, 'label': 'Gustavo A. Madero' },
			'iztacalco': 			{ 'id': 8, 'label': 'Iztacalco' },
			'iztapalapa': 			{ 'id': 9, 'label': 'Iztapalapa' },
			'magdalena-contreras': 	{ 'id': 10, 'label': 'Magdalena Contreras' },
			'miguel-hidalgo': 		{ 'id': 11, 'label': 'Miguel Hidalgo' },
			'milpa-alta': 			{ 'id': 12, 'label': 'Milpa Alta' },
			'tlahuac': 				{ 'id': 13, 'label': 'Tláhuac' },
			'tlalpan': 				{ 'id': 14, 'label': 'Tlalpan' },
			'venustiano-carranza': 	{ 'id': 15, 'label': 'Venustiano Carranza' },
			'xochimilco': 			{ 'id': 16, 'label': 'Xochimilco' }
		},

		'states': {
			'aguascalientes': 		{ 'label': 'Aguascalientes' },
			'baja-california': 		{ 'label': 'Baja California' },
			'baja-california-sur': 	{ 'label': 'Baja California Sur' },
			'campeche': 			{ 'label': 'Campeche' },
			'chiapas': 				{ 'label': 'Chiapas' },
			'chihuahua': 			{ 'label': 'Chihuahua' },
			'coahuila': 			{ 'label': 'Coahuila' },
			'colima': 				{ 'label': 'Colima' },
			'distrito-federal': 	{ 'label': 'Distrito Federal' },
			'durango': 				{ 'label': 'Durango' },
			'estado-de-mexico': 	{ 'label': 'Estado de México' },
			'guanajuato': 			{ 'label': 'Guanajuato' },
			'guerrero': 			{ 'label': 'Guerrero' },
			'hidalgo': 				{ 'label': 'Hidalgo' },
			'jalisco': 				{ 'label': 'Jalisco' },
			'michoacan': 			{ 'label': 'Michoacán' },
			'morelos': 				{ 'label': 'Morelos' },
			'nayarit': 				{ 'label': 'Nayarit' },
			'nuevo-leon': 			{ 'label': 'Nuevo León' },
			'oaxaca': 				{ 'label': 'Oaxaca' },
			'puebla': 				{ 'label': 'Puebla' },
			'queretaro': 			{ 'label': 'Querétaro' },
			'quintana-roo': 		{ 'label': 'Quintana Roo' },
			'san-luis-potosi': 		{ 'label': 'San Luis Potosí' },
			'sinaloa': 				{ 'label': 'Sinaloa' },
			'sonora': 				{ 'label': 'Sonora' },
			'tabasco': 				{ 'label': 'Tabasco' },
			'tamaulipas': 			{ 'label': 'Tamaulipas' },
			'tlaxcala': 			{ 'label': 'Tlaxcala' },
			'veracruz': 			{ 'label': 'Veracruz' },
			'yucatan': 				{ 'label': 'Yucatán' },
			'zacatecas': 			{ 'label': 'Zacatecas' }
		},

		'phoneTypes': {
			'home': 	{ 'id': 1, 'label': 'Casa' },
			'office': 	{ 'id': 2, 'label': 'Oficina' },
			'mobile': 	{ 'id': 3, 'label': 'Móvil' }
		},

		// Based on http://en.wikipedia.org/wiki/List_of_languages_by_number_of_native_speakers, sort of.
		'languages': [
			'Árabe',
			'Alemán',
			'Bengalí',
			'Chino mandarín',
			'Coreano',
			'Español',
			'Francés',
			'Hindi',
			'Inglés',
			'Italiano',
			'Japonés',
			'Portugués',
			'Ruso'
		],

		'utilities': [
			/* Adobe */
			'Adobe Acrobat',
			'Adobe Audition',
			'Adobe After Effects',
			'Adobe AIR',
			'Adobe Captivate',
			'Adobe Dreamweaver',
			'Adobe Fireworks',
			'Adobe Flash',
			'Adobe Flex',
			'Adobe Illustrator',
			'Adobe InCopy',
			'Adobe InDesign',
			'Adobe Lightroom',
			'Adobe Muse',
			'Adobe Photoshop',
			'Adobe Premiere',

			/* Aspel */
			'Aspel BANCO',
			'Aspel CAJA',
			'Aspel COI',
			'Aspel FACTURE',
			'Aspel NOI',
			'Aspel PROD',
			'Aspel SAE',

			/* Autodesk */
			'Autodesk AutoCAD',
			'Autodesk AutoCAD Architecture',
			'Autodesk Maya',
			'Autodesk 3ds Max',
			'Autodesk InfraWorks',
			'Autodesk Inventor',
			'Autodesk Revit',

			/* MS */
			'MS Access',
			'MS Excel',
			'MS Outlook',
			'MS PowerPoint',
			'MS Visio',
			'MS Word',

			/* Misc */
			'Sublime Text'
		],

		'technologies': [
			/* frameworks and libraries */
			'AngularJS',
			'Grails',
			'jQuery',
			'Symfony',
			'Symfony 2',

			/* programming languages */
			'Actionscript',
			'ASP.net',
			'C',
			'C++',
			'C#',
			'Clojure',
			'CoffeeScript',
			'Ensamblador',
			'Groovy',
			'Haskell',
			'Java',
			'Javascript',
			'Lisp',
			'Objective C',
			'Perl',
			'PHP',
			'Python',
			'Ruby',
			'Scala',
			'Scheme',
			'Smalltalk',
			'Visual Basic',

			/* other languages */
			'CSS',
			'CSS3',
			'HTML',
			'HTML5',
			'LESS',
			'SASS',
			'SQL'
		],

		'levels': [
			{ 'key': 'basic', 			'label': 'Básico',		'sort': 0 },
			{ 'key': 'intermediate', 	'label': 'Intermedio',	'sort': 1 },
			{ 'key': 'advanced', 		'label': 'Avanzado',	'sort': 2 },
			{ 'key': 'expert', 			'label': 'Experto',		'sort': 3 }
		]
	},

	fbAsyncInit: function() {
		FB.init({
			appId      : '484127338303100',
			channelUrl : '//cvitaeapp.herokuapp.com/channel.html',
			status     : true,
			cookie     : true,
			xfbml      : true
		});

		FB.getLoginStatus(function(response) {
			if (response.status === 'connected') {
				console.log('connected!');
			}
			else if (response.status === 'not_authorized') {
				console.log('not authorized :(');
				CvitaeApp.fbLogin();
			}
			else {
				console.log('not logged in :|');
				CvitaeApp.fbLogin();
			}
		});
	},

	fbLogin: function() {
		FB.login(function(response) {
			if (response.authResponse) {
				console.log('connected!');
				CvitaeApp.fbGetData();
			} else {
				console.log('cancelled :(');
			}
		});
	},

	fbGetData: function() {
		FB.api('/me', function(response) {
			console.log(response);
		});
	}
};


/* Application */
angular.module('cvitae', ['cvitaeFilters', 'ui.bootstrap']);

/* Cvitae Controller */
var CvitaeCtrl = function($scope) {
	$scope.cvitae = CvitaeApp.cvitae;
	$scope.catalogs = CvitaeApp.catalogs;
	$scope.editMode = true;

	$scope.cvitae.personal.borough = $scope.catalogs.boroughs[0];
	$scope.cvitae.personal.state = $scope.catalogs.states[0];

	$scope.hasStorage = (function() {
		try {
			localStorage.setItem('mod', 'mod');
			localStorage.removeItem('mod');
			return true;
		}
		catch(e) {
			return false;
		}
	}());

	$scope.hasJSON = JSON && typeof JSON.stringify == 'function' && typeof JSON.parse == 'function'; //TODO: Add DC's JSON.js

	$scope.errorDialog = $('#error-dialog');
	$scope.dialogCloseable = $('.dialog-closeable');

	// sort arrays
	$scope.catalogs.utilities.sort();
	$scope.catalogs.technologies.sort();

	/* collections { */
	$scope.getItemIndexById = function(collection, itemId) {
		var index = -1,
			i;

		for(i=0; i<collection.length; i++) {
			if(collection[i].id == itemId) {
				index = i;
				break;
			}
		}

		return index;
	};

	$scope.getItemById = function(collection, itemId) {
		for(var i=0; i<collection.length; i++) {
			if(collection[i].id == itemId) {
				return collection[i];
			}
		}

		return null;
	};

	$scope.getMaxCollectionId = function(collection) {
		var max = -Infinity;

		for(var i=0; i<collection.length; i++) {
			if(max < collection[i].id) {
				max = collection[i].id;
			}
		}

		return max;
	};
	/* collections } */

	$scope.save = function() {
		if($scope.hasStorage && $scope.hasJSON) {
			localStorage.setItem('cvitae.cvitae', JSON.stringify($scope.cvitae));
		}
		else {
			$scope.errorDialog.removeClass('hide');
			$scope.dialogCloseable.addClass('hide');
		}
	};

	$scope.load = function() {
		if($scope.hasStorage && $scope.hasJSON) {
			try {
				var cvitae = JSON.parse(localStorage.getItem('cvitae.cvitae'));

				if(cvitae !== null) {
					$scope.cvitae = cvitae;
				}
			}
			catch(e) {
				console.log('JSON error.');
			}
		}
	};

	$scope.closeDialog = function() {
		$scope.errorDialog.addClass('hide');
		$scope.dialogCloseable.removeClass('hide');
	};

	$scope.load();
};

/* education { */
var EducationCtrl = function($scope) {
	$scope.default = {
		'startDate': 	null,
		'endDate': 		null,
		'institution': 	null,
		'school': 		null,
		'degree': 		null
	};

	$scope.maxId = $scope.getMaxCollectionId($scope.cvitae.education);

	$scope.add = function() {
		var education = angular.extend({ 'id': ++$scope.maxId }, $scope.default);
		$scope.cvitae.education.push(education);
	};

	$scope.remove = function(educationId) {
		var index = $scope.getItemIndexById($scope.cvitae.education, educationId);

		if(index != -1) {
			$scope.cvitae.education.splice(index, 1);
		}
	};

	$scope.addSchool = function(educationId) {
		var education = $scope.getItemById($scope.cvitae.education, educationId);

		if(education) {
			education.school = '';
		}
	};

	$scope.addEndDate = function(educationId) {
		var education = $scope.getItemById($scope.cvitae.education, educationId);

		if(education) {
			education.endDate = '';
		}
	};
};
/* education } */

/* employment { */
var EmploymentCtrl = function($scope) {
	$scope.default = {
		'startDate': 	null,
		'endDate': 		null,
		'company': 		null,
		'position': 	null,
		'description': 	null
	};

	$scope.maxId = $scope.getMaxCollectionId($scope.cvitae.employment);

	$scope.add = function() {
		var employment = angular.extend({ 'id': ++$scope.maxId }, $scope.default);
		$scope.cvitae.employment.push(employment);
	};

	$scope.remove = function(employmentId) {
		var index = $scope.getItemIndexById($scope.cvitae.employment, employmentId);

		if(index != -1) {
			$scope.cvitae.employment.splice(index, 1);
		}
	};

	$scope.addEndDate = function(employmentId) {
		var employment = $scope.getItemById($scope.cvitae.employment, employmentId);

		if(employment) {
			employment.endDate = '';
		}
	};

	$scope.addDepartment = function(employment) {
		employment.department = '';
	};
};
/* employment } */

/* phone { */
var PhoneCtrl = function($scope) {
	$scope.default = {
		'typeId': 	1,
		'number': 	null
	};

	$scope.maxId = $scope.getMaxCollectionId($scope.cvitae.personal.phones);

	$scope.add = function() {
		var phone = angular.extend({ 'id': ++$scope.maxId }, $scope.default);

		$scope.cvitae.personal.phones.push(phone);
	};

	$scope.remove = function(phoneId) {
		var index = $scope.getItemIndexById($scope.cvitae.personal.phones, phoneId);

		if(index != -1) {
			$scope.cvitae.personal.phones.splice(index, 1);
		}
	};
};
/* phone } */

/* language { */
var LanguageCtrl = function($scope) {
	$scope.default = {
		'name': 	null,
		'level': 	'basic'
	};

	$scope.maxId = $scope.getMaxCollectionId($scope.cvitae.complementary.languages);

	$scope.add = function() {
		var language = angular.extend({ 'id': ++$scope.maxId }, $scope.default);

		$scope.cvitae.complementary.languages.push(language);
	};

	$scope.remove = function(languageId) {
		var index = $scope.getItemIndexById($scope.cvitae.complementary.languages, languageId);

		if(index != -1) {
			$scope.cvitae.complementary.languages.splice(index, 1);
		}
	};
};
/* language } */

/* utility { */
var UtilityCtrl = function($scope) {
	$scope.default = {
		'name': 	null,
		'level': 	'basic'
	};

	$scope.maxId = $scope.getMaxCollectionId($scope.cvitae.complementary.utilities);

	$scope.add = function() {
		var utility = angular.extend({ 'id': ++$scope.maxId }, $scope.default);

		$scope.cvitae.complementary.utilities.push(utility);
	};

	$scope.remove = function(utilityId) {
		var index = $scope.getItemIndexById($scope.cvitae.complementary.utilities, utilityId);

		if(index != -1) {
			$scope.cvitae.complementary.utilities.splice(index, 1);
		}
	};
};
/* utility } */

/* technology { */
var TechnologyCtrl = function($scope) {
	$scope.default = {
		'name': 	null,
		'level': 	'basic'
	};

	$scope.maxId = $scope.getMaxCollectionId($scope.cvitae.complementary.technologies);

	$scope.add = function() {
		var technology = angular.extend({ 'id': ++$scope.maxId }, $scope.default);

		$scope.cvitae.complementary.technologies.push(technology);
	};

	$scope.remove = function(technologyId) {
		var index = $scope.getItemIndexById($scope.cvitae.complementary.technologies, technologyId);

		if(index != -1) {
			$scope.cvitae.complementary.technologies.splice(index, 1);
		}
	};
};
/* technology } */

angular.module('cvitaeFilters', []).
	filter('markdown', function() {
		return function(value) {
			return markdown.toHTML(value);
		}
	}).
	filter('gravtastic', function() {
		return function(value) {
			value = value ? value : '';

			return Gravtastic(value);
		}
	}).
	filter('interval', function() {
		return function(start, end) {
			return start + (end ? (' - ' + end) : '');
		}
	});

/*{
	'personal': {
		'firstName': 		'Eduardo',
		'lastName': 		'García Espinosa',
		'dateOfBirth': 		'1988-10-15',
		'email': 			'eg@manoderecha.mx',
		'address': 			'Prol. Candelaria Mz. 23 Lt. 09, Col. Candelaria Ticomán, C.P. 07310',
		'borough': 			null,
		'state': 			null,

		'phones': [
			{ 'id': 1, 'typeId': 1, 'number': '57523477',		'type': 'Casa' },
			{ 'id': 2, 'typeId': 2, 'number': '0445540813944',	'type': 'Móvil' }
		]
	},

	'education': [
		{
			'id': 			1,
			'startDate': 	'2003',
			'endDate': 		'2006',
			'institution': 	'Instituto Fundación Azteca',
			'school': 		null,
			'degree': 		'Técnico en Computación'
		},
		{
			'id': 			2,
			'startDate': 	'2006',
			'endDate': 		'2010',
			'institution': 	'Instituto Politécnico Nacional',
			'school': 		'Escuela Superior de Cómputo',
			'degree': 		'Ingeniero en Sistemas Computacionales'
		}
	],

	'employment': [
		{
			'id': 			1,
			'startDate': 	'2010',
			'endDate': 		'2013',
			'current': 		true,
			'company': 		'VincoOrbis',
			'department': 	null,
			'position': 	'Desarrollador Web',
			'description': 	'- Liderazgo de proyecto: aplicación web para administración de proyectos.\n- Consultoría en la metodología aplicada por la herramienta.\n- Homologación de la interfaz gráfica.'
		},
		{
			'id': 			2,
			'startDate': 	'2010',
			'endDate': 		'2006',
			'current': 		false,
			'company': 		'imaginum1965',
			'department': 	'Diseño Web',
			'position': 	'Desarrollador Frontend Jr.',
			'description': 	'- Liderazgo de proyecto: aplicación web para administración de proyectos.\n- Consultoría en la metodología aplicada por la herramienta.\n- Homologación de la interfaz gráfica.'
		}
	]
}*/