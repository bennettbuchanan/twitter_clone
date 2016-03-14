// Create a platform object to communicate with the HERE REST APIs
var platform = new H.service.Platform({
   'app_id': 'RokhLzmrisHPChInvlcD',
   'app_code': 'WGu17uNw2HBb_3ooFZhKYQ'
}),

maptypes = platform.createDefaultLayers();

// Obtain the default map types from the platform object:
var defaultLayers = platform.createDefaultLayers();

// setup the Streetlevel imagery
platform.configure(H.map.render.panorama.RenderEngine);

// Add window resize listener to adjust the map dimensions.
window.addEventListener('resize', function() {
  map.getViewPort().resize();
});


// Instantiate a map in the 'map' div, set the base map to normal
var map = new H.Map(document.getElementById('mapContainer'), 
  maptypes.normal.map, {
  center: {lat: 37.792027, lng: -122.399462},
  zoom: 16
});



// Enable map events, like "contextmenu"
var events = new H.mapevents.MapEvents(map);


// Create the default UI:
var ui = H.ui.UI.createDefault(map, defaultLayers);


// Create an info bubble object at a specific geographic location:
var bubble = new H.ui.InfoBubble({lat: 37.792027, lng: -122.399462}, {
        content: '<b>Hello World!</b>'
       });

// Add info bubble to the UI:
ui.addBubble(bubble);


// Create a zoomRectangle object at a specific geographic location:
var name = 'ZoomRectangle';
var control = new H.ui.ZoomRectangle();


// Add zoomRectangle to the UI:
ui.addControl(name, control);

ui.getControl('zoom').setEnabled(true)



// Enable the map event system
var mapevents = new H.mapevents.MapEvents(map);

// Enable map interaction (pan, zoom, pinch-to-zoom)
var behavior = new H.mapevents.Behavior(mapevents);

// Enable the default UI
var ui = H.ui.UI.createDefault(map, maptypes);

map.addEventListener('tap', function (evt) {
  alert('Clicked at ' + evt.currentPointer.viewportX + ',' +
    evt.currentPointer.viewportY);
});



