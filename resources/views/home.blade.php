<!DOCTYPE html>
<html>
<head>
    <title>Welcome to My Laravel App</title>
    <style>
        #wrapper {
            display: flex;
            flex-direction: row;
        }
        #page-content-wrapper {
            flex: 1;
            padding: 20px;
        }
    </style>
</head>

<body>
    @include('templates.sidebar')
    <h1>Welcome to My Laravel App!</h1>
    <p>This is a simple example view.</p>
</body>
</html>
