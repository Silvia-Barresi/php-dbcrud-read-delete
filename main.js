
function printPaganti(paganti){

  var datiPagante = $('#paganti');

  var template = $("#paganti-template").html();
  var compiled =  Handlebars.compile(template);

  // ciclo for of per ciclare ogni singolo pagante dentro la variabile pagante

  for (var pagante of paganti) {

    // console.log(pagante);
    var paganteHtml = compiled(pagante);
    datiPagante.append(paganteHtml);

  }

}


function getAllPaganti() {

    $.ajax({

      url: 'getPaganti.php',
      method: 'GET',
      success: function (data){

        console.log(data);

        printPaganti(data);


      },
      error: function (err){

        console.error(error);

      }
    })
}


// function deletePaganti() {
//   $("#paganti").on('click', ".fa-trash", function() {
//       // console.log('clicked');
//       $(this).parent('.pagante').remove();
//   });
// }

function deletePaganti(){

    var clickOn = $(this).parent('.pagante');
    var id = clickOn.data('id');

    // console.log(id);

    $.ajax({

      url:'deleteIdPagante.php',
      method: 'POST',
      data:{
        id:id
      },
      success: function (data) {

          console.log('Pagante con id ' + id + ' cancellato');

          clickOn.remove();
          // clickOn.fadeOut(3000, function(){
          //   clickOn.remove();
          // })
      },

      error: function (error) {
        console.error(error);
      }

    })
}


function init(){

  getAllPaganti();
  // console.log('hello!');
  $("#paganti").on('click', ".fa-trash", deletePaganti);
}

$(document).ready(init);
