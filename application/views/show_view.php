<?php
echo doctype('html5');
echo heading('<span style="color: #FF5733;">Software Engineering</span>', 1, 'id="headername"'); // เปลี่ยนสีหัวข้อ
echo heading('<span;">MR.Thanawat Srisaeng 664259020 sec 66/53</span>', 1, 'id="headername"');
echo br(5);

$image_properties = array(
    'src' => 'https://lh3.googleusercontent.com/a/ACg8ocLkV2SOP00IhU-Q8t3LVNa-CUwz7NeeUEMaUfq4QbpSEdj8l-Q=s360-c-no',
    'width' => '200',
    'height' => '200',
    'alt' => 'starbuck images',
);

echo img($image_properties);

// เพิ่มสีให้กับรายการใน list
$list = array(
    '<span style="color: red;">red</span>',
    '<span style="color: blue;">blue</span>',
    '<span style="color: green;">green</span>',
    '<span style="color: yellow;">yellow</span>',
);

echo ol($list);
?>
