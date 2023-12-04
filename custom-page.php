<?php

// custom_page.php
require_once(__DIR__ . '/config.php'); // Include Moodle configuration file

$PAGE->set_context(context_system::instance());
$PAGE->set_pagelayout('standard');
$PAGE->set_title('Custom Page');
$PAGE->set_heading('Custom Page');

// Add your custom content here
$content = 'Hello, this is my custom page content.';
$PAGE->navbar->add('Custom Page');
$PAGE->set_url('/custom-page');
echo $OUTPUT->header();
echo $content;
echo $OUTPUT->footer();