/*JavaScript filter code */
/*To ensure the search is case-insensitive*/
$.expr[":"].contains = $.expr.createPseudo(function(arg) {
  return function( elem ) {
      return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
  };
});

/*filter elements by name*/
$("#search").keyup(function() {
    var val = $.trim(this.value);
    if (val === "") {
    $('.game').show();
    } else {
    $('.game').hide();
    $(".game:contains(" + val + ")").show();
    }
  });
