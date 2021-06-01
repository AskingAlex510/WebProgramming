<?php

function read_all_stores() {
  $file_name = 'data/stores.csv';
  $fss = fopen($file_name, 'r');
  $first = fgetcsv($fss);
  $stores = [];
  while ($row = fgetcsv($fss)) {
    $i = 0;
    $store = [];
    foreach ($first as $col_name) {
      $store[$col_name] =  $row[$i];
      $i++;
    }
    $stores[] = $store;
  }
  return $stores;
}

function get_store($store_id) {
  $stores = read_all_products();
  foreach ($stores as $s) {
    if ($s['id'] == $store_id) {
      return $s;
    }
  }
  return false;
}
?>