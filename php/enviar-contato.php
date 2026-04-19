<?php

declare(strict_types=1);

header('Content-Type: text/html; charset=utf-8');

/*
 * Fluxo de envio/armazenamento de contato desativado temporariamente.
 * Manter comentado até ativação de banco e e-mail.
 *
 * Código original preservado abaixo:
 *
 * $configPath = __DIR__ . '/config.php';
 * if (!is_readable($configPath)) {
 *     header('Location: ../contato.html?erro=config');
 *     exit;
 * }
 *
 * /** @var array<string, string> $cfg *\/
 * $cfg = require $configPath;
 *
 * $nome = trim((string) ($_POST['nome'] ?? ''));
 * $email = trim((string) ($_POST['email'] ?? ''));
 * $assunto = trim((string) ($_POST['assunto'] ?? ''));
 * $conteudo = trim((string) ($_POST['conteudo'] ?? ''));
 *
 * if ($nome === '' || $email === '' || $assunto === '' || $conteudo === '') {
 *     header('Location: ../contato.html?erro=1');
 *     exit;
 * }
 *
 * if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 *     header('Location: ../contato.html?erro=1');
 *     exit;
 * }
 *
 * $len = static function (string $s): int {
 *     return function_exists('mb_strlen') ? mb_strlen($s, 'UTF-8') : strlen($s);
 * };
 * if ($len($nome) > 200 || $len($assunto) > 300 || $len($conteudo) > 8000) {
 *     header('Location: ../contato.html?erro=1');
 *     exit;
 * }
 *
 * mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 *
 * try {
 *     $mysqli = new mysqli(
 *         $cfg['db_host'],
 *         $cfg['db_user'],
 *         $cfg['db_pass'],
 *         $cfg['db_name']
 *     );
 *     $mysqli->set_charset($cfg['db_charset'] ?? 'utf8mb4');
 * } catch (Throwable $e) {
 *     header('Location: ../contato.html?erro=1');
 *     exit;
 * }
 *
 * $ip = $_SERVER['REMOTE_ADDR'] ?? '';
 * if (strlen($ip) > 45) {
 *     $ip = '';
 * }
 *
 * try {
 *     $stmt = $mysqli->prepare(
 *         'INSERT INTO contato_mensagens (nome, email, assunto, conteudo, ip_cliente) VALUES (?, ?, ?, ?, ?)'
 *     );
 *     $stmt->bind_param('sssss', $nome, $email, $assunto, $conteudo, $ip);
 *     $stmt->execute();
 *     $stmt->close();
 * } catch (Throwable $e) {
 *     $mysqli->close();
 *     header('Location: ../contato.html?erro=1');
 *     exit;
 * }
 *
 * $mysqli->close();
 *
 * $to = $cfg['scrum_email'] ?? '';
 * $from = $cfg['mail_from'] ?? 'noreply@localhost';
 *
 * if ($to !== '' && filter_var($to, FILTER_VALIDATE_EMAIL)) {
 *     $mailSubject = '[TerraSense] ' . $assunto;
 *     $safeSubject = str_replace(["\r", "\n"], '', $mailSubject);
 *     $body = "Nome: {$nome}\nE-mail: {$email}\n\n{$conteudo}";
 *     $headers = [
 *         'MIME-Version: 1.0',
 *         'Content-Type: text/plain; charset=UTF-8',
 *         'Content-Transfer-Encoding: 8bit',
 *         'From: ' . $from,
 *         'Reply-To: ' . $email,
 *     ];
 *     @mail($to, $safeSubject, $body, implode("\r\n", $headers));
 * }
 *
 * header('Location: ../contato.html?enviado=1');
 * exit;
 */

header('Location: ../contato.html?erro=desativado');
exit;
