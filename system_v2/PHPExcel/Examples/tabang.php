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
$objPHPExcel->getActiveSheet(0)->setCellValue('B1', 'Full Name');
$objPHPExcel->getActiveSheet(0)->setCellValue('C1', 'Gender');
$objPHPExcel->getActiveSheet(0)->setCellValue('D1', 'Passport Number');
$objPHPExcel->getActiveSheet(0)->setCellValue('E1', 'Iqama Number');
$objPHPExcel->getActiveSheet(0)->setCellValue('F1', 'Email Address');
$objPHPExcel->getActiveSheet(0)->setCellValue('G1', 'Occupation');
$objPHPExcel->getActiveSheet(0)->setCellValue('H1', 'Contact Number');
$objPHPExcel->getActiveSheet(0)->setCellValue('I1', 'Other Contact Number');
$objPHPExcel->getActiveSheet(0)->setCellValue('J1', 'Location in KSA');
$objPHPExcel->getActiveSheet(0)->setCellValue('K1', 'Employer Name');
$objPHPExcel->getActiveSheet(0)->setCellValue('L1', 'Employer Contact');
$objPHPExcel->getActiveSheet(0)->setCellValue('M1', 'Saudi Agency');
$objPHPExcel->getActiveSheet(0)->setCellValue('N1', 'Philippine Agency');
$objPHPExcel->getActiveSheet(0)->setCellValue('O1', 'Complain');
$objPHPExcel->getActiveSheet(0)->setCellValue('P1', 'Date Complained');

foreach(range('A', 'P') as $cols){

	$objPHPExcel->getActiveSheet()
	->getColumnDimension($cols)
	->setAutoSize(true);

}

$row_count = 3;
$i=0;
$query = mysqli_query($con,"SELECT * FROM tbl_tabang");
while($row = mysqli_fetch_assoc($query)){

$fname = $row["first_name"];
$mname = $row["middle_name"];
$lname = $row["last_name"];
$fullname = ucfirst($fname) . " " . ucfirst($mname) . " " . ucfirst($lname);
$gender = $row["gender"];
$passport = $row["passport"];
$iqama = $row["iqama"];
$email_address = $row["email_address"];
$occupation = $row["occupation"];
$contact_number = $row["contact_number"];
$contact_number2 = $row["contact_number2"];
$location_ksa = $row["location_ksa"];
$employer_name = $row["employer_name"];
$employer_contact = $row["employer_contact"];
$saudi_agency = $row["saudi_agency"];
$agency = $row["agency"];
$complain = $row["complain"];
$date_created = $row["date_created"];

$i++;

foreach(range('A', 'P') as $cols){

	$objPHPExcel->getActiveSheet()
	->getColumnDimension($cols)
	->setAutoSize(true);

} 

$objPHPExcel->getActiveSheet()->setCellValue('A' .$row_count,$i);
$objPHPExcel->getActiveSheet(0)->setCellValue('B' .$row_count,$fullname);
$objPHPExcel->getActiveSheet(0)->setCellValue('C' .$row_count,$gender);
$objPHPExcel->getActiveSheet(0)->setCellValue('D' .$row_count,$passport);
$objPHPExcel->getActiveSheet(0)->setCellValue('E' .$row_count,$iqama);
$objPHPExcel->getActiveSheet(0)->setCellValue('F' .$row_count,$email_address);
$objPHPExcel->getActiveSheet(0)->setCellValue('G' .$row_count,$occupation);
$objPHPExcel->getActiveSheet(0)->setCellValue('H' .$row_count,$contact_number);
$objPHPExcel->getActiveSheet(0)->setCellValue('I' .$row_count,$contact_number2);
$objPHPExcel->getActiveSheet(0)->setCellValue('J' .$row_count,$location_ksa);
$objPHPExcel->getActiveSheet(0)->setCellValue('K' .$row_count,$employer_name);
$objPHPExcel->getActiveSheet(0)->setCellValue('L' .$row_count,$employer_contact);
$objPHPExcel->getActiveSheet(0)->setCellValue('M' .$row_count,$saudi_agency);
$objPHPExcel->getActiveSheet(0)->setCellValue('N' .$row_count,$agency);
$objPHPExcel->getActiveSheet(0)->setCellValue('O' .$row_count,$complain);
$objPHPExcel->getActiveSheet(0)->setCellValue('P' .$row_count,$date_created);

$row_count++;

}
							

$objPHPExcel->getActiveSheet()->setTitle('Tabang');
$objPHPExcel->setActiveSheetIndex(0);
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Tabang.xls"');
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