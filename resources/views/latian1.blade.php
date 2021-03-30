<html>
    <head>
        <title>Priyo Pujonggo </title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            html, body{
                background-color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 1rem 2rem;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <h1 v-text="title"></h1>
            <header-component></header-component>
            <router-view></router-view>
            <footer-component></footer-component>
            <!-- <div class="map">
                 map with alamat goes here -->
                <!-- <gmap-map :center="{lat:10, lng:10}" :zoom="7" style="width: 100%; height:440px;"></gmap-map> -->
            <!--</div> -->
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        
        
    </body>
</html>