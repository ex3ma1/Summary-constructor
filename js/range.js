$( function() {
    $( "#slider-range-max" ).slider({
      range: "max",
      min: 1,
      max: 10,
      value: 10,
      slide: function( event, ui ) {
        $( "#amount" ).val( ui.value );
      }
    });
    $( "#amount" ).val( $( "#slider-range-max" ).slider( "value" ) );
  } );

var arr = [1,2,3,4,5,6,7,8,9,10]

arr[1] = 'Elementary'
arr[2] = 'Pre-inter'