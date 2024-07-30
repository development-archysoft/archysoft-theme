<?php

require_once(dirname(__FILE__) . '/../../../wp-load.php');
if ($_POST['form_id'] === 'footer_contact_form') {
$to = 'info@archysoft.com, marketing@archysoft.com';
$subject = 'Footer form';

$message = '
Name: ' . $_POST['name'] . ',
Email: ' . $_POST['email'] . ',
----------------------------
Message: ' . $_POST['message'] . '
----------------------------
';
$name = 'Archysoft';
$email = $_POST['email'];

$headers = array(
  "From: $name <no-reply@archysoft.com>",
  "Reply-To: $name <$email>"
);

if (wp_mail($to, $subject, $message, $headers)) {
  exit;
}
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['form_id'] === 'leave_resume_form') {
    $to = 'hr@archysoft.com';
    $subject = 'Resume Submission';

    // Перевірка, чи був завантажений файл
    if (isset($_FILES['resume'])) {
        $file_name = $_FILES['resume']['name'];
        $file_temp = $_FILES['resume']['tmp_name'];
        $file_size = $_FILES['resume']['size'];
        $file_error = $_FILES['resume']['error'];

        // Переміщення завантаженого файлу в потрібне місце (директорія для завантаження файлів в WordPress)
        $uploads_dir = wp_upload_dir();
        $destination = $uploads_dir['path'] . '/' . $file_name;
        move_uploaded_file($file_temp, $destination);

        // Збір даних з форми
        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];

        // Складання повідомлення для електронної пошти
        $message = "
            First Name: $name \n
            Last Name: $last_name \n
            Email: $email \n
        ";

        // Додавання файлу до повідомлення
        $attachments = array($destination);

        // Додавання інших даних для електронного листа
        $headers = array(
            "From: Archysoft <no-reply@archysoft.com>",
            "Reply-To: $name <$email>"
        );

        // Відправлення електронного листа з прикріпленим файлом
        if (wp_mail($to, $subject, $message, $headers, $attachments)) {
            // Виходимо з файлу після відправлення
            exit;
        }
    }
}
if ($_POST['form_id'] === 'leave_subscribe_form') {
$to = 'info@archysoft.com, marketing@archysoft.com';
$subject = 'Subscribe form';

$message = '
Name: ' . $_POST['name'] . ',
Email: ' . $_POST['email'];

$name = 'Archysoft';
$email = $_POST['email'];

$headers = array(
  "From: $name <no-reply@archysoft.com>",
  "Reply-To: $name <$email>"
);

if (wp_mail($to, $subject, $message, $headers)) {
  exit;
}
}
if ($_POST['form_id'] === 'contacts_form') {
$to = 'info@archysoft.com, marketing@archysoft.com';
$subject = 'Form from conatct page';

$message = '
Name: ' . $_POST['name'] . ',
Email: ' . $_POST['email'] . ',
----------------------------
Message: ' . $_POST['message'] . '
----------------------------
';

$name = 'Archysoft';
$email = $_POST['email'];

$headers = array(
  "From: $name <no-reply@archysoft.com>",
  "Reply-To: $name <$email>"
);

if (wp_mail($to, $subject, $message, $headers)) {
  exit;
}
}
exit;