<!DOCTYPE html>
   <head>
      <title>Router Example</title>
         <script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js" type="text/javascript"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.2/backbone-min.js" type="text/javascript"></script>

      	<script type="text/javascript">
         //'RouteMenu' is a name of the view class
         var RouteMenu = Backbone.View.extend({
            el: '#routemenu',  //'el' defines which element to be used as the view reference

            //defines a click event to occur on link
            events: {
               'click a' : 'onClick'
            },

            //After clicking on a link, router calls 'navigate' to update URL
            onClick: function( e ) {
               router.navigate('/');
            }
        });

        //'Router' is a name of the router class
        var Router = Backbone.Router.extend({

        //The 'routes' maps URLs with parameters to functions on your router
           routes: {
              'route/:id' : 'defaultRoute'
           },
           
           defaultRoute : function(){
	           console.log("myroute two has been called.");
        	},
        });

        //'routemenu' is an instance of the view class
        var routemenu = new RouteMenu();
        //It starts listening to the routes and manages the history for bookmarkable URL's
        Backbone.history.start();
     	</script>
     </head>
  <body>
     
     <section id="routemenu">
        <ul>
           <li> <a href="#/route/1">route 1 </a> </li>
           <li> <a href="#/route/2">route 2 </a> </li>
           <li> <a href="#/route/3">route 3 </a> </li>
       </ul>
    </section>
  </body>
</html>