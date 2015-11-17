var myApp = angular.module("contactApp", []);

myApp.controller('MainCtrl', ['$scope', '$http',function myController($scope, $http) {
  $scope.formData = {};
  $scope.processForm = function() {
    alert('valid form!')
    $http({
      method  : 'POST',
      url     : 'process.php',
      data    : $scope.formData,
      headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
    });
  };
}]);