<html>
<head>
    <title>Guestbook Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #000000;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }
        .header i {
            font-size: 24px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
        }
        .dashboard-title {
            font-size: 32px;
            font-weight: bold;
            margin-top: 20px;
        }
        .profile-card {
            background-color: #f5f7f6;
            border-radius: 20px;
            padding: 40px;
            margin: 40px auto;
            width: 60%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .profile-card img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            margin-right: 40px;
        }
        .profile-info {
            text-align: left;
        }
        .profile-info h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .profile-info .info {
            background-color: #d3d3d3;
            border-radius: 10px;
            padding: 10px 20px;
            margin-bottom: 10px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="header">
        <i class="fas fa-home"></i>
        <div class="title">GUESTBOOK</div>
        <i class="fas fa-user"></i>
    </div>
    <div class="dashboard-title">DashBoard!</div>
    <div class="profile-card">
        <i class="fas fa-user-circle" style="font-size: 150px;"></i>
        <div class="profile-info">
            <h2>Profile</h2>
            <div class="info">Your Name</div>
            <div class="info">Adresssssss</div>
        </div>
    </div>
</body>
</html>
