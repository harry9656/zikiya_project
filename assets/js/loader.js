/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
  $(document).delegate('.open', 'click', function(event){
    $(this).addClass('opened');
    event.stopPropagation();
  });
  
  $(document).delegate('.opened', 'click', function(event){
    $('.open').removeClass('opened');
    event.stopPropagation();
  });
  
  
  $(document).delegate('body', 'click', function(event) {
    $('.open').removeClass('opened');
  });
  
  $(document).delegate('.cls', 'click', function(event){
    $('.open').removeClass('opened');
    event.stopPropagation();
  });
});