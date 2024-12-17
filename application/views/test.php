<?php
// Connect to the database
$host = 'localhost'; // Update your DB host
$username = 'root';  // Update your DB username
$password = '';      // Update your DB password
$database = 'news'; // Update with your database name

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// AJAX request handling
if (isset($_POST['query'])) {
    $query = $_POST['query'];

    // Fetch matching college names
    $sql = "SELECT cname FROM college_master WHERE cname LIKE '%$query%' ORDER BY cname ASC";
    $result = $conn->query($sql);

    // Generate options for dropdown
    $output = '<option value="">Select College</option>';
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $output .= '<option value="' . $row['cname'] . '">' . $row['cname'] . '</option>';
        }
    } else {
        $output .= '<option value="">No College Found</option>';
    }
    echo $output;
    exit; // Stop further execution, as we are handling only AJAX here
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Autocomplete College Search</title>
   
    <link href="<?php echo base_url('asset/css/menu.css'); ?>" rel="stylesheet">
   <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
 <link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('css/sweetalert.css'); ?>" rel="stylesheet">
   
 
   <script src="<?php echo base_url('css/jquery.min.js'); ?>"></script>
  <script src ="<?php echo base_url('css/bootstrap.min.js'); ?>"> </script>

  <script src = "<?php echo base_url('css/sweetalert.min.js'); ?>"></script>
  <script src="<?php echo base_url('css/js/jquery.min.js'); ?>"></script>
 


</head>
<body>

<!-- HTML Form -->
<div class="form-group col-md-3">
  <label for="searchclg">Search College</label>
  <input type="text" class="form-control" id="searchclg" name="searchclg" autocomplete="off">
</div>

<div class="form-group col-md-3">
  <label for="college">College Name*</label>
  <select class="form-control" id="college" name="college">
    <option value="">Select College</option> <!-- Default option -->
  </select>
</div>

<!-- JavaScript for AJAX request -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#searchclg').keyup(function() {  
      var query = $(this).val();
      if (query != '') {
        $.ajax({
          url: '',  
          method: 'POST',
          data: {query: query},  
          success: function(data) {
            $('#college').html(data);  
          }
        });
      } else {
        $('#college').html('<option value="">Select College</option>'); 
      }
    });
  });
</script>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
