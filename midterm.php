<?php
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  echo "<table border='1'>";
  echo "<tr>";
  echo "<td bgcolor='#66FFCC'>"; 
  echo "ลำดับ";
  echo "</td>"; 
  echo "<td bgcolor='#66CCFF'>"; 
  echo "จังหวัด";
  echo "</td>";
  echo "<td bgcolor='#FFD700'>"; 
  echo "ผู้ป่วยใหม่";
  echo "</td>";
  echo "</tr>";
  foreach($data as $key=>$val){
    echo "<tr>";
    echo "<td bgcolor='#66FFCC'>"; 
    echo $key+1;
    echo "</td>"; 
    echo "<td bgcolor='#66CCFF'>"; 
    echo $val->province;
    echo "</td>"; 
    echo "<td bgcolor='#FFD700'>"; 
    echo $val->new_case;
    echo "</td>"; 
    echo "</tr>";
  }
  echo "</table>";
?>
