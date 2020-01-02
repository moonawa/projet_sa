$(function() {
    $('.chambres').first().fadeOut(2000, function suivante() {
		if($('#chambres .chambres').last().attr('id')==$(this).attr('id')){
		 $('#chambres .chambres').show();
		 $('#chambres .chambres').first().fadeOut(2000,suivante);
		}else{
         $(this).next('.chambres').fadeOut(2000,suivante);
		}
    });
  });
  $(function() {
    $('.images').first().fadeOut(3000, function suivante() {
		if($('#diapo .images').last().attr('id')==$(this).attr('id')){
		 $('#diapo .images').show();
		 $('#diapo .images').first().fadeOut(3000,suivante);
		}else{
         $(this).next('.images').fadeOut(3000,suivante);
		}
    });
  });