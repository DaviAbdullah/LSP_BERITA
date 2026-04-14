<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - News Portal</title>
    <style>
        /* Reset Dasar */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { 
            font-family: Arial, sans-serif; 
            background-color: #800000; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
        }

        /* Kotak Login */
        .login-container {
            background-color: #fff;
            width: 100%;
            max-width: 400px;
            padding: 40px;
            border-radius: 4px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border-top: 5px solid #cc0000; /* Garis Merah ala CNN */
        }

        .login-container h2 {
            text-align: center;
            font-weight: 900;
            letter-spacing: -1px;
            margin-bottom: 30px;
            font-size: 24px;
        }

        .login-container h2 span {
            color: #cc0000;
        }

        /* Form Styling */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #cc0000;
        }

        /* Tombol Login */
        button {
            width: 100%;
            padding: 12px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
            text-transform: uppercase;
        }

        button:hover {
            background-color: #cc0000;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #888;
            font-size: 13px;
        }

        .back-link:hover {
            color: #333;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>NEWS<span>ADMIN</span></h2>
    
    <form method="POST" action="proses_login.php">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan username" required>
        </div>
        
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password" required>
        </div>
        
        <button type="submit">Login ke Dashboard</button>
    </form>

    <a href="../index.php" class="back-link">&larr; Kembali ke Beranda</a>
</div>

</body>
</html>