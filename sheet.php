<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Assuming $rows contains your data
// Set column headers
$columnHeaders = ['Column1', 'Column2', 'Column3']; // Adjust the headers according to your data
$sheet->fromArray($columnHeaders, NULL, 'A1');

// Output data
$sheet->fromArray($rows, NULL, 'A2');

$writer = new Xlsx($spreadsheet);

// Write file to the server's temporary directory
$fileName = 'data_export_'.time().'.xlsx';
$temp_file = tempnam(sys_get_temp_dir(), $fileName);
$writer->save($temp_file);

// Download file
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="'.basename($fileName).'"');
header('Cache-Control: max-age=0');
readfile($temp_file);
unlink($temp_file); // Delete the temp file
exit;
?>