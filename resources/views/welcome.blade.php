<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;700;900&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-white text-black selection:bg-orange-500 selection:text-black">

    @include('components.header')
    @include('components.banner')  
    @include('components.expertise')
    @include('components.project')
    @include('components.aboutus')
    @include('components.model')
    @include('components.footer')
    
</body>
</html>