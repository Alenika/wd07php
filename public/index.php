<?php
include __DIR__."/../src/pages.php";

if (isset($_GET['page']) && $_GET['page'] == 'form') {
    include __DIR__."/../src/form.php";
}

if (isset($_GET['page']) && $_GET['page'] == 'form_result') {
    include __DIR__."/../src/form_result.php";
}

if (isset($_GET['page']) && $_GET['page'] == 'page') {
    include __DIR__."/../src/page.php";
}

echo "<pre>";
print_r($_GET);
echo "</pre>";

echo "<pre>";
print_r($_POST);
echo "</pre>";