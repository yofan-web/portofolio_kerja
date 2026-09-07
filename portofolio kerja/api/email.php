<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php#kontak');
    exit;
}

$name = trim((string) ($_POST['name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));

if ($name === '' || $message === '' || mb_strlen($name) > 100 || mb_strlen($message) > 2000 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ../index.php?email=error#kontak');
    exit;
}

$recipient = 'yofanrefki@gmail.com';
$subject = 'Pesan portfolio dari ' . $name;
$body = "Nama: {$name}\nEmail: {$email}\n\nPesan:\n{$message}";
$headers = "From: portfolio@localhost\r\nReply-To: {$email}\r\nContent-Type: text/plain; charset=UTF-8\r\n";

$sent = mail($recipient, $subject, $body, $headers);
header('Location: ../index.php?email=' . ($sent ? 'success' : 'error') . '#kontak');
exit;