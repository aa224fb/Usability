//Kontrollera att sidan är färdigladdad
$(document).ready(function() {

//Första och sista bilden
var $first = $('li:first', 'ul');
var $last = $('li:last', 'ul');

//Nästa-knappen
$('#next').on('click', function() {
	var $next;
	var $selected = $('.selected');

	$next = $selected.next('li').length ? $selected.next('li') : $first;
    $selected.removeClass("selected").fadeOut('fast');
    $next.addClass('selected').fadeIn('fast');
});

//Tillbaka-knappen
 $("#prev").click(function () {
    var $prev,
    $selected = $(".selected");

    $prev = $selected.prev('li').length ? $selected.prev('li') : $last;
    $selected.removeClass("selected").fadeOut('fast');
    $prev.addClass('selected').fadeIn('fast');
    });
});

//Google maps-funktion
   function initMap() {
    //Koordinationer för adressen
    var lundavet = { lat: 55.703092, lng: 13.185572};
    var mapDiv = document.getElementById('map');
    var map = new google.maps.Map(mapDiv, {
      center: lundavet,
      zoom: 16
    });

    //Innehåll för inforutan
    contentString = 'Lundaveterinären' + '<br>' + 'Trollebergsvägen 7' + '<br>' + '223 45 Lund';

    //Skapa en inforuta med innehållet
    var infowindow = new google.maps.InfoWindow({
    content: contentString
    });


    //Skapa markering för adressen
    var marker = new google.maps.Marker({
    position: lundavet,
    map: map,
    title: 'Lundaveterinären'
    });
    
    //Öppna inforutan vid klick-funktion
    marker.addListener('click', function() {
    infowindow.open(map, marker);
    });

  }