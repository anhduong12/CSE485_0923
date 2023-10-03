<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    .logo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-3 sidebar">
				<div class="logo">
					<img src="http://w3cms.makaanlelo.com/static/dashboard/images/logo-full.png" alt="">
				</div>
				<div class="navigation vh-100">
					<div class="navbar">
						<div class="container-fuild">
							<div class="navbar-nav">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link" href="/user.php">Users</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/usermanagment.php">CMS</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/categorymanegement.php">Config</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/categorymanegement.php">Dashboard</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/categorymanegement.php">Dashboard</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/categorymanegement.php">Courses</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/categorymanegement.php">Instructor</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/categorymanegement.php">App</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/categorymanegement.php">Charts</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/categorymanegement.php">Bootstrap</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/categorymanegement.php">Plugin</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/categorymanegement.php">Widget</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="col-md-9">
			<div class="header d-flex justify-content-between align-items-center">
				<i class="h1 bi bi-list"></i>
				<span class="h3" style="font-family: Poppins, sans-serif">Dashboard</span>
				<form action="">
				<div class="input-group flex-nowrap">
				<span class="input-group-text"><i class="fa-solid fa-search"></i></span>
				<input type="text" name="" id="" class="form-control" placeholder="Search here...">
				</div>
			</form>
			</div>
                <div class="main-content">
                    <div class="main-title text-center h3 text-primary">
                        USER
                    </div>
                    <button type="submit" class="btn btn-success btn-md"><i class="bi bi-person-add"></i> Add a New User</button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Full name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Groups</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Date of Birth</th>
							
                            </tr>
                        </thead>
                        <tbody>
							<tr>
							<th scope="row">1</th>
							<td>Albertina</td>
							<td>aleort0@ocn.ne.jp</td>
							<td>Female</td>
							<td>Manager</td>
							<td>197-488-7899</td>
							<td>2001-05-27</td>
							</tr>
							<tr>
							<th scope="row">1</th>
							<td>Albertina</td>
							<td>aleort0@ocn.ne.jp</td>
							<td>Female</td>
							<td>Manager</td>
							<td>197-488-7899</td>
							<td>2001-05-27</td>
							</tr>
							<tr>
							<th scope="row">1</th>
							<td>Albertina</td>
							<td>aleort0@ocn.ne.jp</td>
							<td>Female</td>
							<td>Manager</td>
							<td>197-488-7899</td>
							<td>2001-05-27</td>
							</tr>
							<tr>
							<th scope="row">1</th>
							<td>Albertina</td>
							<td>aleort0@ocn.ne.jp</td>
							<td>Female</td>
							<td>Manager</td>
							<td>197-488-7899</td>
							<td>2001-05-27</td>
							</tr>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class=" pagination">
                            <li class="page-item"><a class="page-link" href="#"><</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</body>
</html>