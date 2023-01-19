<?php

require 'app.php';

function includeTemplates( string $template, bool $home = false): void {
  include TEMPLATES_PATH . "/$template.php";
}