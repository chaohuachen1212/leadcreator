
window.initMap = function initMap() {

  const el = document.getElementById('gmap');
  ;
  if (!el) return;

  const lat = parseFloat(el.dataset.lat);
  const lng = parseFloat(el.dataset.lng);
  const hasLatLng =
    Number.isFinite(lat) && Number.isFinite(lng) && !(lat === 0 && lng === 0);

  const title = el.dataset.title || 'Location';
  const address = (el.dataset.address || '').trim();
  const pinUrl = el.dataset.pin || '';

  const STYLES = [
    {elementType: 'geometry', stylers: [{color: '#f6efe5'}]},
    {featureType: 'poi', stylers: [{visibility: 'off'}]},
    {featureType: 'transit', stylers: [{visibility: 'off'}]},
    {featureType: 'administrative', stylers: [{visibility: 'off'}]},
    {featureType: 'administrative.country', stylers: [{visibility: 'on'}]},
    {
      featureType: 'road',
      elementType: 'geometry',
      stylers: [{color: '#ffffff'}, {lightness: 30}, {saturation: -100}],
    },
    {
      featureType: 'road.highway',
      elementType: 'geometry',
      stylers: [{color: '#f2eee7'}],
    },
    {
      featureType: 'road',
      elementType: 'labels.icon',
      stylers: [{visibility: 'off'}],
    },
    {
      featureType: 'water',
      elementType: 'geometry',
      stylers: [{color: '#e8ecee'}, {lightness: 10}],
    },
    {elementType: 'labels.text.stroke', stylers: [{visibility: 'off'}]},
    {elementType: 'labels.text.fill', stylers: [{color: '#6d6d6d'}]},
  ];

  const mapOpts = {
    center: hasLatLng ? {lat, lng} : {lat: 37.773972, lng: -122.431297},
    zoom: 15,
    gestureHandling: 'cooperative',
    fullscreenControl: false,
    streetViewControl: false,
    mapTypeControl: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    styles: STYLES,
  };

  const map = new google.maps.Map(el, mapOpts);

  let marker = null;

  const setMarker = (pos) => {
    map.setCenter(pos);

    const markerOpts = {map, position: pos, title};
      if (pinUrl) {
        markerOpts.icon = {
          url: pinUrl,
          scaledSize: new google.maps.Size(36, 36),
          anchor: new google.maps.Point(18, 36),
        };
      }
      marker = new google.maps.Marker(markerOpts);
  };

  if (hasLatLng) {
    setMarker({lat, lng});
  } 
};


function escapeHtml(s) {
  return String(s)
    .replaceAll('&', '&amp;')
    .replaceAll('<', '&lt;')
    .replaceAll('>', '&gt;')
    .replaceAll('"', '&quot;')
    .replaceAll("'", '&#039;');
}
