(function (){
  var agendaKids = function ()
  {
    var index = function ()
    {
      ajaxLoad();
    };

    var ajaxLoad = function()
    {
      $('form .btn').click(function (e) {
        e.preventDefault();
        var name = $('#name').val();
        var phone = $('#phone').val();
        var shift = $('#shift').val();
        console.log('starting ajax');
        $.ajax({
          url: "./post.php",
          type: "post",
          data: { name: name, phone: phone, shift: shift },
          success: function (data) {
            var dataParsed = JSON.parse(data);
            console.log(dataParsed);
          }
        });

      });
    };

    return {
      init: index
    }
  }();
  $(document).ready(agendaKids.init)
})();