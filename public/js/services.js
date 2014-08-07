function getMembers($scope, $http)
{
$http({method: 'GET', url: 'api/v1/member'}).success(function(data)
{
$scope.members = data; // response data 
});
}