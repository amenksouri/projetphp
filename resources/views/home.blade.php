<!DOCTYPE html>
<html>
<head>
    <title>mesmar fi hit</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <style>
        #wrapper {
            display: flex;
            flex-direction: row;
        }
        #page-content-wrapper {
            flex: 1;
            padding: 20px;
        }
        body{
            margin: 0px !important; 
        }
    </style>
            
</head>

<body>



@include('templates.header')

    @include('templates.sidebar')
    <h1>Welcome to Mesmar Fi Hit</h1>
    <p>This is a platform for freelancing. this project is only for validating our project in Tekup School.</p>
   


@include('templates.footer')
</body>

</html>
