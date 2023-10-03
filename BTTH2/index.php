<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Tạo một đối tượng PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

// Cấu hình thông tin SMTP
$mail->IsSMTP(); // Bật chế độ sử dụng SMTP
$mail->SMTPDebug = 1; // Chế độ debugging: 1 = lỗi và thông báo, 2 = chỉ thông báo
$mail->SMTPAuth = true; // Kích hoạt chế độ xác thực SMTP
$mail->SMTPSecure = 'ssl'; // Kích hoạt chế độ bảo mật SSL
$mail->Host = "smtp.gmail.com"; // Địa chỉ máy chủ SMTP của Gmail
$mail->Port = 465; // Cổng SMTP của Gmail (hoặc 587 nếu bạn không sử dụng SSL)
$mail->IsHTML(true); // Cho phép gửi email dưới dạng HTML

// Cấu hình thông tin đăng nhập Gmail
$mail->Username = "aduong1906@gmail.com"; // Địa chỉ email Gmail của bạn
$mail->Password = "wfrfzsvsxbtmmffz"; // Mật khẩu Gmail của bạn

// Thiết lập thông tin email
$mail->SetFrom("aduong1906@gmail.com");
$mail->Subject = "DiemDanh";
$mail->Body = "Nguyen Anh Duong - 62THNB - 2051063747";
$mail->AddAddress("nguyenanhduong120@gmail.com"); // mail thay

// Gửi email
if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent";
}
?>