<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{<?php echo asset('css/app'); ?>}" type="text/css" rel="stylesheet" />
        
        <meta name="csrf-token" value="<?php echo e(csrf_token()); ?>" />
    </head>
    <body>
        <div id="app">
          <example-component>ciao</example-component>
        </div>
        <script src="{<?php echo asset('js/app.js'); ?>}" type="text/javascript"></script>
 
    </body>
</html>
<?php /**PATH /Users/wagoo/Documents/studio_personale/laravel/vuelaravelcrud/resources/views/post.blade.php ENDPATH**/ ?>