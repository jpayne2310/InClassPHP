(function () {
    
    'use strict';
    angular
        .module('app.address')
        .controller('AddressDeleteController', AddressDetailController);

    AddressDetailController.$inject = ['$routeParams','AddressService'];

    /*
     * This controller will find the details of an address from the address service.
     */
    function AddressDeleteController($routeParams, AddressService) {
        var vm = this;

 
        vm.addressId = $routeParams.addressId;

        activate();

        ////////////

        function activate() {
           AddressService.deleteAddress(vm.addressId)
        }
               
   

    }
    
})();