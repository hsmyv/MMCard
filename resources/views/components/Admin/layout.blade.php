<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="/dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Dashboard - Midone - Tailwind HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="/dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="app">
       <x-mobilemenu/>

        <div class="flex">
          <x-sidemenu/>


        

                {{$slot}}

        </div>
     <!-- BEGIN: Dark Mode Switcher-->
     <div data-url="side-menu-dark-dashboard.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
        <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
        <div class="dark-mode-switcher__toggle border"></div>
    </div>
    <!-- END: Dark Mode Switcher-->
    <!-- BEGIN: JS Assets-->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
    <script src="/dist/js/app.js"></script>
    <!-- END: JS Assets-->
</body>
</html>

