var app = angular.module("myApp", []); 

app.controller('MainController', ['$scope', '$http', function($scope) { 
	$scope.products = [
		{ 
			name: 'Harry Potter and the cursed child', 
			price: 18, 
			pubdate: new Date('2016', '07', '31'),
			cover: '../image/cursedchild.jpg',
			likes: 0,
			dislikes: 0
		},
		{ 
			name: 'Harry Potter and the sorcerers stone', 
			price: 7, 
			pubdate: new Date('1999', '08', '08'), 
			cover: '../image/sorcerersstone.jpg',
			likes: 0,
			dislikes: 0
		},
		{ 
			name: 'Harry Potter and The Chamber of Secrets', 
			price: 7, 
			pubdate: new Date('2000', '08', '15'), 
			cover: '../image/chambersecrets.jpg',
			likes: 0,
			dislikes: 0
		},
		{ 
			name: 'Harry Potter & The Prisoner of Azkaban', 
			price: 7, 
			pubdate: new Date('2001', '08', '11'), 
			cover: '../image/prisonerAzkaban.jpg',
			likes: 0,
			dislikes: 0 
		}, 
		{ 
			name: 'Harry Potter and The Goblet of Fire', 
			price: 8, 
			pubdate: new Date('2002', '07', '30'), 
			cover: '../image/GobletFire.webp',
			likes: 0,
			dislikes: 0 
		}, 
		{ 
			name: 'Harry Potter and The Order of Phoenix', 
			price: 8, 
			pubdate: new Date('2004', '08', '10'), 
			cover: '../image/orderphoenix.jpg',
			likes: 0,
			dislikes: 0 
		}, 
		{ 
			name: 'Harry Potter and The Half Blood Prince', 
			price: 8, 
			pubdate: new Date('2006', '07', '25'), 
			cover: '../image/bloodprince.png',
			likes: 0,
			dislikes: 0 
		}, 
		{ 
			name: 'Harry Potter and The Deathly Hallows', 
			price: 8, 
			pubdate: new Date('2009', '07', '07'), 
			cover: '../image/deathlyhallows.jpg',
			likes: 0,
			dislikes: 0 
		}
	];
	$scope.plusOne = function(index) { 
		$scope.products[index].likes += 1; 
	};
	$scope.minusOne = function(index) { 
		$scope.products[index].dislikes += 1; 
	};
}]);