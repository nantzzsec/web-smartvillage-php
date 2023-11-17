<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diagram Batang Usia Penduduk</title>

<head>
  <header>
    <center>STATISTIK PENDUDUK</center>
  </header>
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    *{
      margin-bottom: 100px;
      margin-top: 10px;
    }
    center{
      margin-bottom: 50px;
      margin-top: 50px;
      margin: center;
      font-size: 47px;
    }
    p{
      margin-top: -50px;
    }
    h3{
      font-family: 'Roboto', Helvetica, Arial, sans-serif;
      font-weight: 700;
      margin-bottom: 10px;
      font-size: 20px;
    }
    body {
      max-width: max-content;
      max-height: 100px;
      margin: 0 auto;
      margin-top: auto;
      margin-bottom: auto;
      position: relative;
    }

    #usia {
      margin-top: 20px;
      margin-bottom: 20px;
    }

    #myBarChart {
      width: 1000px;
      max-width: 800px;
      margin: auto;
    }
    #end{
      margin-top: 20px;
    }
    
  </style>
</head>

<body>
  <div class="usia">
    <h3>DATA STATISTIK USIA</h3>
    <canvas id="usiaChart" width="400" height="200"></canvas>

  </div>
  <script>
    function createUsiaChart(data) {
      var ctx = document.getElementById('usiaChart').getContext('2d');

      var usiaChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });

      return usiaChart;
    }

    function getDataUsia() {
      var data = <?php echo json_encode(getDataFromDatabase()); ?>;
      return data;
    }

    var dataUsia = getDataUsia();
    var usiaChart = createUsiaChart(dataUsia);
  </script>

  <?php
  function getDataFromDatabase()
  {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "smartvillage";

    $koneksi = new mysqli($servername, $username, $password, $dbname);

    if ($koneksi->connect_error) {
      die("Connection failed: " . $koneksi->connect_error);
    }

    $sql = "SELECT COUNT(CASE WHEN usia BETWEEN 1 AND 4 THEN 1 END) AS balita,
                   COUNT(CASE WHEN usia BETWEEN 5 AND 12 THEN 1 END) AS anak_anak,
                   COUNT(CASE WHEN usia BETWEEN 13 AND 18 THEN 1 END) AS remaja,
                   COUNT(CASE WHEN usia BETWEEN 19 AND 49 THEN 1 END) AS dewasa,
                   COUNT(CASE WHEN usia >= 50 THEN 1 END) AS lansia
            FROM data_statistik_penduduk";
    $result = $koneksi->query($sql);

    $data = array();
    while ($row = $result->fetch_assoc()) {
      $data['labels'] = ['Balita', 'Anak-Anak', 'Remaja', 'Dewasa', 'Lansia'];
      $data['datasets'][0]['data'] = array_values($row);
    }
    $koneksi->close();
    return $data;
  }
  ?>
  </div>


  <div class="gender">
    <h3>STATISTIK GENDER</h3>

    <?php
    // Ambil data dari database
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'smartvillage';

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
      die("Koneksi ke database gagal: " . $conn->connect_error);
    }

    // Modifikasi query untuk mengkategorikan data berdasarkan umur
    $query = "SELECT
                kategori,
                SUM(CASE WHEN gender = 'Laki-laki' THEN 1 ELSE 0 END) as total_laki_laki,
                SUM(CASE WHEN gender = 'Perempuan' THEN 1 ELSE 0 END) as total_perempuan
              FROM (
                SELECT
                    CASE
                        WHEN usia BETWEEN 0 AND 4 THEN 'Anak Balita'
                        WHEN usia BETWEEN 5 AND 12 THEN 'Anak-Anak'
                        WHEN usia BETWEEN 13 AND 18 THEN 'Remaja'
                        WHEN usia BETWEEN 19 AND 49 THEN 'Dewasa'
                        WHEN usia >= 50 THEN 'Lansia'
                    END AS kategori,
                    gender
                FROM data_statistik_penduduk
              ) AS subquery
              GROUP BY kategori";
    $result = $conn->query($query);

    // Ambil data dari hasil query
    $data = array();
    while ($row = $result->fetch_assoc()) {
      $data[] = array(
        'kategori' => $row['kategori'],
        'total_laki_laki' => $row['total_laki_laki'],
        'total_perempuan' => $row['total_perempuan']
      );
    }
    ?>

    <div>
      <div style="width: 100%; height: 1000%; margin: auto;">
        <canvas id="myBarChart"></canvas>
      </div>

      <script>
        var ctx = document.getElementById('myBarChart').getContext('2d');
        var myBarChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: <?php echo json_encode(array_column($data, 'kategori')); ?>,
            datasets: [{
              label: 'Laki-laki',
              backgroundColor: 'rgb(75, 192, 192)',
              data: <?php echo json_encode(array_column($data, 'total_laki_laki')); ?>,
              barPercentage: 0.9, // Menyesuaikan lebar batang
            }, {
              label: 'Perempuan',
              backgroundColor: 'rgb(255, 99, 132)',
              data: <?php echo json_encode(array_column($data, 'total_perempuan')); ?>,
              barPercentage: 0.9, // Menyesuaikan lebar batang
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
              x: {
                stacked: false, // Membuat diagram batang tidak stacked
              },
              y: {
                stacked: false,
                beginAtZero: true,
              }
            }
          }
        });
      </script>

    </div>
    <div class="extra-space-l"></div>
            <hr size="5px">

</body>

</html>