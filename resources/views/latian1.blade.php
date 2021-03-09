<html>
    <head>
        <title>Priyo Pujonggo </title>
        <style>
            body{
                font-family: sans-serif;
                margin: 15%;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <h1 v-text="title"></h1>
            <header-component></header-component>
            <router-view></router-view>
            <footer-component></footer-component>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>