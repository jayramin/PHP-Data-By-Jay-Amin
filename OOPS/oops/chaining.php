<?php
class QueryClas{
  public $Query;
  public function select($val)
  {
    $this->Query .= "SELECT $val";
    return $this;
  }
  public function from($fromval)
  {
    $this->Query .= " FROM $fromval";
    return $this;
  }
  public function where($where)
  {
    $this->Query .= " WHERE user_id = '$where'";
    return $this;
  }
}
$D = new QueryClas();
// echo "<br>Simple Query<br>";
// echo $Q = $D -> select('*') ->from('user') -> Query;
// echo "<br>Column Specification Query<br>";
// echo $Q = $D -> select('username,gender,address') ->from('user') -> Query;
echo "<br>Query With Where Condition<br>";
echo $Q = $D -> select('*') ->from('user') ->where('1') -> Query;
?>
