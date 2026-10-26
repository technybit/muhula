<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Dashboard</title>

    <style>
        body{
            margin:0;
            font-family: Arial, sans-serif;
        }

        .sidebar{
            width:250px;
            height:100vh;
            background:#2c3e50;
            position:fixed;
            left:0;
            top:0;
            color:white;
        }

        .sidebar h2{
            padding:20px;
            text-align:center;
        }

        .sidebar a{
            display:block;
            color:white;
            padding:15px 20px;
            text-decoration:none;
        }

        .sidebar a:hover{
            background:#34495e;
        }

        .content{
            margin-left:250px;
            padding:30px;
        }

        .topbar{
            background:#f4f4f4;
            padding:15px;
            display:flex;
            justify-content:space-between;
            margin-bottom:20px;
        }
    </style>

</head>
<body>

<div class="sidebar">

    <h2>Portal</h2>

    <?= site_url('dashboard') ?>Dashboard</a>
     ?>">Reports</a>
     ?>">Users</a>
     ?>">Products</a>
     ?>">Orders</a>
     ?>">Settings</a>

</div>

<div class="content">

    <div class="topbar">
        <span>
            Welcome <?= auth()->user()->username ?>
        </span>

         ?>">Logout</a>
    </div>

    <?= $this->renderSection('content') ?>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>