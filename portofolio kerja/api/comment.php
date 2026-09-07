<?php
require_once __DIR__ . '/../config/database.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: ../index.php#kontak'); exit; }
$name = trim((string) ($_POST['name'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));
if ($name === '' || $message === '' || mb_strlen($name) > 100 || mb_strlen($message) > 1000) { header('Location: ../index.php?comment=error#kontak'); exit; }
$pdo = db();
if (!$pdo) { header('Location: ../index.php?comment=error#kontak'); exit; }
$stmt = $pdo->prepare('INSERT INTO comments (name, message) VALUES (:name, :message)');
$stmt->execute(['name' => $name, 'message' => $message]);
header('Location: ../index.php?comment=success#kontak');
exit;
