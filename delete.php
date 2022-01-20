<?php
session_start();
require 'functions.php';

if (hapus($_GET) > 0) {
  header("Location: anggota.php");
} else {
  header("Location: anggota.php");
}
