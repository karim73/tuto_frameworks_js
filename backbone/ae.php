<!DOCTYPE html>
  <head>
    <title>Event Once Example</title>
      <script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js" type="text/javascript"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.2/backbone-min.js" type="text/javascript"></script>
  </head>
  <body>
     <script type="text/javascript">

     	//The created object 'myVal' is extended using Backbone.Events method
        var myVal = _.extend({name:'TutorialsPoint!!!'}, Backbone.Events);

        //The once() method causes the bound callback to only fire once before being removed
        myVal.once('hello', function () {
           document.write("The value after firing once is: <br/>");
           document.write(this.name);//name will get displayed by referring the current object
        });

        //It triggers the 'hello' event on object 'myVal'
        document.write("First invoke :<br/>");
        myVal.trigger('hello');

        document.write("<br/><br/>Second invoke :<br/>");
        myVal.trigger('hello');
     </script>
  </body>
</html>