<?php
$file = 'AWB#774744273206.htm';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>
</script>
  <script>
    'use strict';
    let newWindow = open('/', 'example', 'width=300,height=300')
    newWindow.onload = function() {
      newWindow.close();
      alert(newWindow.closed); // true
    };
  </script>

</body>
</html>
