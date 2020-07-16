var bzMod = angular.module('beingZeroApp',['ngRoute']);

bzMod.config(function($routeProvider){

	$routeProvider
	/*medicine*/
		.when('/dentist', {
			templateUrl: 'pages/medicine/dentist.htm', controller: 'dentistCtrl'
		})
		.when('/cardiologist', {
			templateUrl: 'pages/medicine/cardiologist.htm', controller: 'cardiologistCtrl'
		})
		.when('/neurologist', {
			templateUrl: 'pages/medicine/neurologist.htm', controller: 'neurologistCtrl'
		})
		.when('/gynecologist', {
			templateUrl: 'pages/medicine/gynecologist.htm', controller: 'gynecologistCtrl'
		})
		.when('/traumatologist', {
			templateUrl: 'pages/medicine/traumatologist.htm', controller: 'traumatologistCtrl'
		})
		.when('/psychologist', {
			templateUrl: 'pages/medicine/psychologist.htm', controller: 'psychologistCtrl'
		})
		.when('/nutritionist', {
			templateUrl: 'pages/medicine/nutritionist.htm', controller: 'nutritionistCtrl'
		})
		.when('/optometrist', {
			templateUrl: 'pages/medicine/optometrist.htm', controller: 'optometristCtrl'
		})
		.when('/ENT', {
			templateUrl: 'pages/medicine/ENT.htm', controller: 'ENTCtrl'
		})
		.when('/dermatologist', {
			templateUrl: 'pages/medicine/dermatologist.htm', controller: 'dermatologistCtrl'
		})
		.when('/masseur', {
			templateUrl: 'pages/medicine/masseur.htm', controller: 'masseurCtrl'
		})
		.when('/therapist', {
			templateUrl: 'pages/medicine/therapist.htm', controller: 'therapistCtrl'
		})

		/*education*/

		.when('/webprogramming', {
			templateUrl: 'pages/education/webprogramming.htm', controller: 'webprogrammingCtrl'
		})
		.when('/graphics', {
			templateUrl: 'pages/education/graphics.htm', controller: 'graphicsCtrl'
		})
		.when('/math', {
			templateUrl: 'pages/education/math.htm', controller: 'mathCtrl'
		})
		.when('/physics', {
			templateUrl: 'pages/education/physics.htm', controller: 'physicsCtrl'
		})
		.when('/biology', {
			templateUrl: 'pages/education/biology.htm', controller: 'biologyCtrl'
		})
		.when('/chemistry', {
			templateUrl: 'pages/education/chemistry.htm', controller: 'chemistryCtrl'
		})
		.when('/english', {
			templateUrl: 'pages/education/english.htm', controller: 'englishCtrl'
		})
		.when('/russian', {
			templateUrl: 'pages/education/russian.htm', controller: 'russianCtrl'
		})
		.when('/arabic', {
			templateUrl: 'pages/education/arabic.htm', controller: 'arabicCtrl'
		})
		.when('/uzbek', {
			templateUrl: 'pages/education/uzbek.htm', controller: 'uzbekCtrl'
		})
		.when('/foreign', {
			templateUrl: 'pages/education/foreign.htm', controller: 'foreignCtrl'
		})
		.when('/dance', {
			templateUrl: 'pages/education/dance.htm', controller: 'danceCtrl'
		})
		.when('/history', {
			templateUrl: 'pages/education/history.htm', controller: 'historyCtrl'
		})

		/*registration*/

		.when('/add_participant', {
			templateUrl: '../participant/add_participant.htm', controller: 'add_participantCtrl'
		});


});

/*medicine*/

bzMod.controller('beingZeroCtrl', function(){

});

bzMod.controller('dentistCtrl', function(){

});


bzMod.controller('cardiologistCtrl', function(){
	
});

bzMod.controller('neurologistCtrl', function(){
	
});

bzMod.controller('gynecologistCtrl', function(){

});

bzMod.controller('traumatologistCtrl', function(){
	
});

bzMod.controller('psychologistCtrl', function(){
	
});

bzMod.controller('nutritionistCtrl', function(){

});

bzMod.controller('optometristCtrl', function(){
	
});

bzMod.controller('ENTCtrl', function(){
	
});

bzMod.controller('dermatologistCtrl', function(){

});

bzMod.controller('masseurCtrl', function(){
	
});

bzMod.controller('therapistCtrl', function(){
	
});

/*education*/

bzMod.controller('webprogrammingCtrl', function(){

});


bzMod.controller('graphicsCtrl', function(){
	
});

bzMod.controller('mathCtrl', function(){
	
});

bzMod.controller('physicsCtrl', function(){

});

bzMod.controller('biologyCtrl', function(){
	
});

bzMod.controller('chemistryCtrl', function(){
	
});

bzMod.controller('englishCtrl', function(){

});

bzMod.controller('russianCtrl', function(){
	
});

bzMod.controller('arabicCtrl', function(){
	
});

bzMod.controller('uzbekCtrl', function(){

});

bzMod.controller('foreignCtrl', function(){
	
});

bzMod.controller('danceCtrl', function(){
	
});

bzMod.controller('historyCtrl', function(){
	
});

/*education*/


/*registration*/

bzMod.controller('add_participantCtrl', function(){
	
});