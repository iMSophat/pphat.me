<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ @csrf_token() }}">
    <title>{{ 'TItle' }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>

</head>
<body>
    <div class="h-screen flex items-center justify-center overflow-hidden">
        <form class="border p-5 py-10 rounded-lg flex flex-col gap-y-7 w-full max-w-sm" id="insertCode">
            @csrf
            <p id="message"></p>
            <input type="email" class="w-full py-1.5 px-2 focus:outline-none rounded-md error" name="email" id="email">
            <input type="password" class="w-full py-1.5 px-2 focus:outline-none rounded-md error" name="password" id="password">
            <button type="button" class="waves-effect button -primary border-none" onclick="formSubmit('insertCode','/login','/')">Submit</button>
        </form>
        
    </div>



    <script src="{{ mix('js/utils.js') }}"></script>
    
</body>
</html>