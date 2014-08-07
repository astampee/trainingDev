<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Training API</title>
    
</head>
<body>
    <script src="http://underscorejs.org/underscore.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="http://backbonejs.org/backbone.js"></script>
    
    <script>
        (function(){
            "use strict"
            
            window.memberTbl = Backbone.Model.extend({
                defaults: {
                    firstName: '',
                    surname:''
                },
                urlRoot: 'member/'
                
            });
        })
    </script>
    
    
</body>
</html>
