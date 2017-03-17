(function() {
  $(document).on("ready page:load", function() {
    $(".button-collapse").sideNav();
    $(".dropdown-button").dropdown();
    $('select').material_select();
    $('.datepicker').pickadate({
      selectMonths: true,
      selectYears: 15
    });
    $('ul.tabs').tabs();
    $("#search").on("click", function() {
      $("#search").hide();
      $("#div-src").show(1, function() {
        return $("#btn-src").show(1, function() {
          $("#input-src").show();
          return $("#input-src").animate({
            width: 160 + 'px'
          });
        });
      });
      return false;
    });
    $('#close-src').on("click", function() {
      return $('#div-src').hide(1, function() {
        $('#btn-src').hide();
        $('#input-src').width(0);
        return $('#search').show();
      });
    });
    $("#one").hide();
    $("#two").hide();
    $("#three").hide();
    return $("#colaboradores").on("change", function() {
      var valor;
      valor = $('select[id=colaboradores]').val();
      console.log(valor);
      if (valor = 1) {
        $("#one").show();
        console.log("Es el valor");
        $("#one").animate({
          display: 'block'
        });
      }
      if (valor = 2) {
        $("#one").show();
        $("#two").show();
        console.log("Es el valor");
        $("#one").animate({
          display: 'block'
        });
      }
      if (valor = 3) {
        $("#one").show();
        $("#two").show();
        $("#three").show();
        console.log("Es el valor");
        return $("#one").animate({
          display: 'block'
        });
      }
    });
  });

}).call(this);

