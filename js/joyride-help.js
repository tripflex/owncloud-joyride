$(document).ready(function()
{
  $('#header').append('<div style="float: right;"><img src="'+ oc_webroot +'/core/img/actions/history.png" style="cursor: pointer;" id="joyrideIcon" title="Take a Tour of the Cloud Interface"\></div>');
  $('#joyrideIcon').click( function(event)
      {
            $("#ocJoyRide").joyride({
              /* Options will go here */
            });
      }
  );
}
);
