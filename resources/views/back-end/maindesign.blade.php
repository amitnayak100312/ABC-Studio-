<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

   <style>
        :root {
            /* --- THEME COLORS --- */
            --primary-orange: #ff6b00; /* Your Brand Orange */
            --action-blue: #3498db;    /* The Blue from your screenshot button */
            --sidebar-bg: #121212;     /* Pure Dark */
            --sidebar-text: #b3b3b3;   /* Light Gray */
            --main-bg: #f4f4f4;        /* Light Gray content bg */
            --card-bg: #ffffff;        /* White cards */
            --text-dark: #2c2c2c;
            --table-header: #2c3e50;   /* Dark Blue-Grey for table head */
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }

        body { display: flex; min-height: 100vh; background-color: var(--main-bg); }

        /* --- SIDEBAR --- */
        .sidebar {
            width: 260px;
            background-color: var(--sidebar-bg);
            color: var(--sidebar-text);
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100%;
            border-right: 1px solid #333;
            z-index: 10;
        }

        .brand {
            padding: 25px;
            font-size: 22px;
            font-weight: 800; /* Bold */
            text-align: center;
            color: var(--primary-orange);
            border-bottom: 1px solid #333;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .nav-links { list-style: none; padding-top: 20px; }
        .nav-links li a {
            display: flex; align-items: center; padding: 15px 30px;
            color: var(--sidebar-text); text-decoration: none;
            transition: 0.2s; font-size: 15px; border-left: 4px solid transparent;
        }
        
        /* Hover State */
        .nav-links li a:hover {
            background-color: #1f1f1f; color: white;
        }

        /* Active State (Matches your screenshot) */
        .nav-links li a.active {
            background-color: #1a1a1a; 
            color: var(--primary-orange);
            border-left: 4px solid var(--primary-orange);
        }
        
        .nav-links li a i { margin-right: 15px; width: 20px; text-align: center; }

        /* --- MAIN CONTENT --- */
        .main-content { margin-left: 260px; flex: 1; padding: 40px; }

        /* --- CARD STYLE (Matches your white box) --- */
        .card {
            background: var(--card-bg); 
            padding: 30px; 
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05); 
            margin-bottom: 30px;
        }
        
        .card h2 {
            margin-bottom: 20px;
            font-size: 20px;
            color: black;
            font-weight: 700;
        }

        /* --- TABLE STYLING (Matches image_601129.png) --- */
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        
        thead {
            background-color: var(--table-header);
            color: white;
        }
        
        th { 
            padding: 15px; 
            text-align: left; 
            font-weight: 600; 
            font-size: 14px;
        }
        
        td { 
            border-bottom: 1px solid #eee; 
            padding: 15px; 
            color: #555; 
            font-size: 14px;
            vertical-align: middle; 
        }
        
        /* Client Name Styling */
        .client-name { color: #333; font-weight: bold; display: block; }
        .client-email { font-size: 12px; color: #888; display: block; margin-top: 2px; }

        /* Action Button (Blue - Matches Screenshot) */
        .btn-reply {
            background-color: var(--action-blue); 
            color: white; 
            border: none;
            padding: 6px 15px; 
            border-radius: 4px; 
            cursor: pointer; 
            font-size: 13px;
        }
        .btn-reply:hover { background-color: #2980b9; }

        /* --- MODAL (POPUP) --- */
        .modal {
            display: none; position: fixed; z-index: 100; left: 0; top: 0;
            width: 100%; height: 100%; background-color: rgba(0,0,0,0.5);
        }
        .modal-content {
            background-color: #fff; margin: 10% auto; padding: 25px;
            border-radius: 5px; width: 50%; max-width: 500px;
            position: relative; box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .close { position: absolute; top: 15px; right: 20px; font-size: 24px; cursor: pointer; color: #aaa; }
        .close:hover { color: #333; }

        /* Form Elements */
        label { display: block; margin-bottom: 8px; font-weight: 600; font-size: 13px; color: #333; }
        input, textarea {
            width: 100%; padding: 10px; border: 1px solid #ddd;
            border-radius: 4px; font-size: 14px; outline: none; margin-bottom: 15px;
        }
        input:focus, textarea:focus { border-color: var(--action-blue); }
        
        .btn-submit {
            width: 100%; background-color: var(--action-blue); color: white;
            padding: 10px; border: none; border-radius: 4px; cursor: pointer; font-size: 15px;
        }
        .btn-submit:hover { background-color: #2980b9; }

        /* Mobile */
        @media (max-width: 768px) {
            .sidebar { width: 60px; }
            .brand, .nav-links li a span { display: none; }
            .nav-links li a { justify-content: center; padding: 20px 0; }
            .main-content { margin-left: 60px; padding: 15px; }
            .modal-content { width: 90%; }
        }
        
        /* --- ADD CONTENT FORM STYLES --- */

/* 1. Title Styling with Icon */
.card-title {
    font-size: 20px;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 2px solid #f0f0f0;
    display: flex;
    align-items: center;
    gap: 10px;
}
.card-title i {
    color: var(--primary-orange);
    background: #fff0e6; /* Light orange bg for icon */
    padding: 10px;
    border-radius: 8px;
}

/* 2. The Grid Layout */
.form-row {
    display: flex;
    flex-wrap: wrap; /* Allows items to drop to the next line */
    gap: 25px;       /* Space between inputs */
}

/* 3. Individual Input Groups */
.form-group {
    flex: 1 1 45%;   /* Default: Take up about half width */
    display: flex;
    flex-direction: column;
    min-width: 300px; /* Prevent getting too small on mobile */
}

/* 4. Force Full Width for Description & Image */
.full-width {
    flex: 1 1 100%;
}

/* 5. Labels */
.form-group label {
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 8px;
    color: #444;
}

/* 6. Inputs, Selects, and Textareas */
.form-group input, 
.form-group select, 
.form-group textarea {
    padding: 12px 16px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 14px;
    background-color: #fafafa;
    transition: all 0.3s ease;
    width: 100%;
}

/* Taller box for Description */
.form-group textarea {
    min-height: 120px;
    resize: vertical;
}

/* 7. Active/Focus State (The Orange Glow) */
.form-group input:focus, 
.form-group select:focus, 
.form-group textarea:focus {
    border-color: var(--primary-orange);
    background-color: #fff;
    outline: none;
    box-shadow: 0 0 0 4px rgba(255, 107, 0, 0.1); /* Soft orange glow */
}

/* 8. The Save Button */
.btn-save {
    background-color: var(--primary-orange);
    color: white;
    border: none;
    padding: 14px 30px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 8px;
    cursor: pointer;
    margin-top: 20px;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: background 0.3s, transform 0.2s;
}

.btn-save:hover {
    background-color: #e65100; /* Darker orange */
    transform: translateY(-2px); /* Slight lift effect */
}
    </style>
</head>

<body>
    
    @include('back-end.sidebar')
    @yield('content')
    @yield('viewClient')
    @yield('viewreview')
    

</body>

</html>