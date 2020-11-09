<?php

include("../../include/db.php");

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

require_once dirname(__FILE__) . '/../Classes/PHPExcel.php';


$objPHPExcel = new PHPExcel();

$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");

$objPHPExcel->getActiveSheet(0)->setCellValue('A1', '#'); 
$objPHPExcel->getActiveSheet(0)->setCellValue('B1', 'Applicant Name');
$objPHPExcel->getActiveSheet(0)->setCellValue('C1', 'Email Address');
$objPHPExcel->getActiveSheet(0)->setCellValue('D1', 'Contact Number');
$objPHPExcel->getActiveSheet(0)->setCellValue('E1', 'Address');

foreach(range('A', 'E') as $cols){

	$objPHPExcel->getActiveSheet()
	->getColumnDimension($cols)
	->setAutoSize(true);

}

$row_count = 3;
$i=0;
$query = mysqli_query($con,"SELECT * FROM tbl_applicants WHERE application_status = '1' WHERE removed = 'No'");
while($row = mysqli_fetch_assoc($query)){

$fname = $row["first_name"];
$mname = $row["middle_name"];
$lname = $row["last_name"];
$email_address = $row["email_address"];
$contact_number = $row["contact_number"];
$address = $row["address"];

$fullname = $fname . " " . $mname . " " . $lname;
$i++;

foreach(range('A', 'E') as $cols){

	$objPHPExcel->getActiveSheet()
	->getColumnDimension($cols)
	->setAutoSize(true);

} 

$objPHPExcel->getActiveSheet()->setCellValue('A' .$row_count,$i);
$objPHPExcel->getActiveSheet(0)->setCellValue('B' .$row_count,$fullname);
$objPHPExcel->getActiveSheet(0)->setCellValue('C' .$row_count,$email_address);
$objPHPExcel->getActiveSheet(0)->setCellValue('D' .$row_count,$contact_number);
$objPHPExcel->getActiveSheet(0)->setCellValue('E' .$row_count,$address);

$row_count++;

}
							

$objPHPExcel->getActiveSheet()->setTitle('Waiting Applicants');
$objPHPExcel->setActiveSheetIndex(0);
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Waiting Applicants.xls"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');

header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
header ('Cache-Control: cache, must-revalidate'); 
header ('Pragma: public'); 

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;

?>