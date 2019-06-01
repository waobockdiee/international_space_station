<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>
        <div>Latitude: <span id="lat"></span></div>
        <div>Longitude: <span id="lon"></span></div>
    </div>

    <script>

        const url = 'https://api.wheretheiss.at/v1/satellites/25544';

        async function getISS () {

            const response = await fetch(url);
            const data = await response.json();

            const {latitude, longitude} = data;

            document.getElementById('lat').textContent = latitude;
            document.getElementById('lon').textContent = longitude;

            console.log(data);
        }

        getISS();
    
    </script>

</body>
</html>