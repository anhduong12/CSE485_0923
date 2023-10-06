<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Hospital </title>
</head>
<body>
    <div class="container">
        
    <a href="<?=DOMAIN.'/views/patient/add.php'?> class='btn btn-success'">Thêm mới</a><h3 class="text-center text-upercase text-success my-3">Danh sách bệnh nhân</h3>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã bệnh nhân</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Ngày</th>
      <th scope="col">Triệu chứng</th>
      <th scope="col">Mã bác sĩ</th>
      <!-- <i class="bi bi-folder-plus"></i> -->
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($patients as $patient) {
        ?>
        <tr>
        <th scope="row"><?= $patient->getId();?></th>
        <td><?= $patient->getTenBenhNhan();?></td>
        <td><?= $patient->getNgayKham();?></td>
        <td><?= $patient->getTrieuChung();?></td>
        <td><?= $patient->getIdBacSi();?></td>
        <td>
          <a href=""><i class="bi bi-pencil-square"></i></a>
        </td>
        <td>
          <a href=""><i class="bi bi-trash"></i></a>
        </td>
        </tr>
    <?php
    }
    ?>
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>