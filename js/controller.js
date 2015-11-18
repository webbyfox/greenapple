var myApp = angular.module("contactFormApp", []);



myApp.controller('mainController', ['$scope', '$http',function ($scope, $http) {
  $scope.formData = {};
  $scope.submitForm = function() {
    console.log($scope.contact.fullname)
    $http({
      method  : 'POST',
      url     : 'process.php',
      data    : $.param($scope.contact),
      headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
    });
  };
}]);