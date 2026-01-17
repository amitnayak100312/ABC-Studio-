<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        
        /* Custom Swiper Styles to match layout */
        .swiper {
            width: 100%;
            height: 100%;
            padding-bottom: 40px !important; /* Space for dots */
        }
        .swiper-pagination-bullet-active {
            background-color: #ea580c !important; /* Orange dots */
        }
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;700;900&display=swap');
    </style>
      
</head>
<body class="bg-white text-black selection:bg-orange-500 selection:text-black"
    @include('components.header')
    @include('components.banner')  
    @include('components.expertise')
    @include('components.project')
    @include('components.aboutus')
    @include('components.review')
    @include('components.model')
    @include('components.footer')
</body>
</html>