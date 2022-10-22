<?php
print_r($_POST);


if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $birthday = $_POST['birthday'];
  $gender = $_POST['gender'];
  $country = $_POST['country'];

  $form_data = [$name, $email, $birthday, $gender, $country];

  // $userdata = "./userdata.csv";
  $handle = fopen("userdata.csv", "a");
  fputcsv($handle, $form_data);
  fclose($handle);
}else {
  echo "No data";
}

?>
