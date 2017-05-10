<!DOCTYPE html>
<html>
<head>
<meta name="description" content="Ember - Dynamic Calculations" />
<meta charset="utf-8">
<title>Ember Starter Kit</title>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/2.1.0/normalize.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://builds.handlebarsjs.com.s3.amazonaws.com/handlebars-v1.3.0.js"></script>
  <script src="http://builds.emberjs.com/tags/v1.5.1/ember.js"></script>

  
  
</head>
<body>

  <script type="text/x-handlebars">
    <h2> Welcome to Ember.js</h2>

    {{outlet}}
  </script>

  <script type="text/x-handlebars" data-template-name="index">
  
   
<div>
     <label>Number of ice creams:</label>
     {{input type="text" value=numberOne}}
    </div>
    <div>
      <label>The price for an ice cream:</label>
      {{input type="text" value=numberTwo}}
    </div>
    <p>Total: {{total}}</p>
                
               
    
    
 </script>
 
 <script>
 
 App = Ember.Application.create();


App.Router.map(function() {
  // put your routes here
});

App.IndexController = Ember.ObjectController.extend({

  numberOne: 0,
  numberTwo: 0,
  
  
  
  total: function() {
    return this.get('numberOne') * this.get('numberTwo');
  }.property('numberOne', 'numberTwo'),
  
 
  
  
  
});
 
 </script>
</body>
</html>