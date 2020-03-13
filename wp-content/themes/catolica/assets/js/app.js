document.addEventListener( 'wpcf7submit', function( event ) {}, false );

modelEvent = function(e) {
  e.preventDefault();
}


$(document).ready(function(){
    $('.banner-home').slick({
      autoplay: true,
      arrows: true,
      dots: true
    });

});

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

var areas = {
  'NAE' : {
    0 : 'Atendimento ao estudante',
    1 : 'Secretaria de Graduação',
    2 : 'Secretaria de Pós-Graduação',
  },
  'Direção' : {
      0 : 'Secretaria Direção',
  },
  'Financeiro' : {
    0 : 'Atendimento Financeiro',
  },
  'Marketing' : {
    0 : 'Marketing e mídias',
  },
  'Locação' : {
    0 : 'Locações de espaços',
  },
  'T.I' : {
    0 : 'Suporte ao sistema acadêmico (Gennera)',
  },
  'Recepção' : {
    0 : 'Informações gerais',
  },
  'Biblioteca' : {
    0 : 'Biblioteca',
  },
  'Ouvidoria' : {
    0 : 'Ouvidoria',
  },
  'CPA' : {
    0 : 'Coordenação',
  },
  'SAC' : {
    0 : 'SAC',
  }
};

$(document).ready(function() {
  $('select[name="your-recipient"]').empty();
  $('select[name="area"]').change(function() {
      var area = areas[$(this).val()]
      var count = Object.keys(area).length;
      $('select[name="your-recipient"]').empty();
      for(i=0; i<=count; i++){
        if(area[i] != undefined)
          $('select[name="your-recipient"]').append('<option value="'+area[i]+'">'+area[i]+'</option>')
      }
   });
})