
var app = angular.module('paginate', []);


app.directive('pagination', function(){
  return{
      restrict : 'E',
      templateUrl : 'paginate'
  };
});