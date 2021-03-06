<!DOCTYPE html>
  <head>
    <title>Event Off Example</title>
      <script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js" type="text/javascript"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.2/backbone-min.js" type="text/javascript"></script>
  </head>
  <body>
     <script type="text/javascript">
        //Here creating an object 'myVal' and extending with Backbone.Events method
        var myVal = _.extend({name:'hello'}, Backbone.Events);
        
        var myFunc = function () {
           document.write('Hello<br/>');
        };
        var myFunc1 = function () {
           document.write('Welcome to TutorialsPoint<br/>');
        };

        //The on() method will bind the callback function to objects 'myFunc' and 'myFunc1'
        myVal.on('log',myFunc);
        myVal.on('log',myFunc1);
        document.write('Before using off event, values will be :<br/>');

        //trigger() method callbacks for the given event and display the text defined in the 'myFunc' and 'myFunc1' functions
        myVal.trigger('log');

        //The off() method removes the callback for 'myFunc' and logs only text of 'myFunc1'
        myVal.off('log',myFunc);

        document.write("<br>");
        document.write('After using off event, values will be :<br/>');
        myVal.trigger('log');
     </script>
   </body>
</html>