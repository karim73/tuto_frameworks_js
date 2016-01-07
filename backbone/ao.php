<!DOCTYPE html>
   <head>
      <title>Router Example</title>
         <script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.2/backbone-min.js" type="text/javascript"></script>
   </head>
   <body>
      <script type="text/javascript">
          //'Router' is a name of the router class
         var Router = Backbone.Router.extend({

           //The 'routes' maps URLs with parameters to functions on your router
            routes: {
               '': 'myroute_1',
               'myroute_2': 'myroute_22'
            },

            //After executing the code, it will display this line
            myroute_1: function(){
               document.write("myroute one has been called.");
            },

            //When you enter the #myroute_2 at the end of url, it will display this line
            myroute_22: function(){
	           document.write("myroute two has been called.");
            },
         });
         var appRouter=new Router;   //It is an instantiation of the router

         //It start listening to the routes and manages the history for bookmarkable URL's
         Backbone.history.start();
     </script>
  </body>
</html>