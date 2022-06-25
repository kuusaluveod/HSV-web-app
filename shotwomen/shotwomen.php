<?php
namespace Phppot;
use Phppot\Model\FAQ;
?>
<html>
<head>
<title>WOMEN SHOT PUT</title>
<?php include_once '../header.php';?>
</head>
<body>
<!-- partial -->
<div class="wrapper2">
<table class="tbl-qa">
        <thead>
            <tr>
                <th class="table-header-name" width="10%">RANK</th>
                <th class="table-header-name">NAME</th>
                <th class="table-header">I</th>
                <th class="table-header">II</th>
                <th class="table-header">III</th>
                <th class="table-header">IV</th>
                <th class="table-header">V</th>
                <th class="table-header">VI</th>
                <th class="table-header-best">BEST</th>
            </tr>
        </thead>
        <tbody>
<?php
require_once ("Model/FAQ.php");
$faq = new FAQ();
$faqResult = $faq->getFAQ();

foreach ($faqResult as $k => $v) {
    ?>
              <tr class="table-row">
                <td class="name"><b><?php echo $k+1; ?></b></td>
                <td class="name"><b><?php echo $faqResult[$k]["fname"]; ?></b> <b><?php echo $faqResult[$k]["lname"]; ?></b></td>
                <td contenteditable="true"
                    onBlur="saveToDatabase(this,'throw1','<?php echo $faqResult[$k]["id"]; ?>')"
                    onClick="showEdit(this);"><?php echo $faqResult[$k]["throw1"]; ?></td>
                <td contenteditable="true"
                    onBlur="saveToDatabase(this,'throw2','<?php echo $faqResult[$k]["id"]; ?>')"
                    onClick="showEdit(this);"><?php echo $faqResult[$k]["throw2"]; ?></td>
                <td contenteditable="true"
                    onBlur="saveToDatabase(this,'throw3','<?php echo $faqResult[$k]["id"]; ?>')"
                    onClick="showEdit(this);"><?php echo $faqResult[$k]["throw3"]; ?></td>
                <td contenteditable="true"
                    onBlur="saveToDatabase(this,'throw4','<?php echo $faqResult[$k]["id"]; ?>')"
                    onClick="showEdit(this);"><?php echo $faqResult[$k]["throw4"]; ?></td>
                <td contenteditable="true"
                    onBlur="saveToDatabase(this,'throw5','<?php echo $faqResult[$k]["id"]; ?>')"
                    onClick="showEdit(this);"><?php echo $faqResult[$k]["throw5"]; ?></td>
                <td contenteditable="true"
                    onBlur="saveToDatabase(this,'throw6','<?php echo $faqResult[$k]["id"]; ?>')"
                    onClick="showEdit(this);"><?php echo $faqResult[$k]["throw6"]; ?></td>
                <td class="best" contenteditable="false"
                    onBlur="saveToDatabase(this,'result1','<?php echo $faqResult[$k]["id"]; ?>')"
                    onClick="showEdit(this);"><b><?php echo $faqResult[$k]["result1"]; ?></b></td>
            </tr>
        <?php
}
?>
          </tbody>
    </table>
</div>
</body>
</html>
