<?php
function redirection(string $location)
{
  header('Location: ' . $location);
  exit;
}