// ajax city selection on user profile
$(document).ready(function () {
   $('#sub_category_name').on('change', function () {
      let id = $(this).val();
      $('#sub_category').empty();
      $('#sub_category').append(`<option value="0" disabled selected>Processing...</option>`);
      $.ajax({
            type: 'GET',
            url: '/getedit/' + id,
            dataType: "json",
            success: function (response) {
               $('select[name="city"]').empty();
               $('#sub_category').append(`<option value="0" disabled selected>Choose your city</option>`);
               $.each(response, function(key, value){
                  $('select[name="city"]').append('<option value="'+ value.secondaryRelation +'">' + value.name + '</option>');
               });
            }
      });
   });
});