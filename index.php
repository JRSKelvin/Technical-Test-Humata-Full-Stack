<?php
// Create Array From Example Case
$exampleCaseArrayObject = [
  [
    "distance" => "10",
    "time" => "30",
  ],
  [
    "distance" => "15",
    "time" => "40",
  ],
  [
    "distance" => "20",
    "time" => "60",
  ],
  [
    "distance" => "18",
    "time" => "45",
  ],
  [
    "distance" => "13",
    "time" => "35",
  ],
  [
    "distance" => "12",
    "time" => "32",
  ],
];

// For Loop For Counting Interval Or Speed Average
for ($i = 0; $i < count($exampleCaseArrayObject); $i++) {
  $interval = $exampleCaseArrayObject[$i]["distance"] / $exampleCaseArrayObject[$i]["time"] * 60;
  $exampleCaseArrayObject[$i]["interval"] = $interval;
}

// Sorting By Descending
usort($exampleCaseArrayObject, fn ($a, $b) => $b['interval'] <=> $a['interval']);

// Create Variable And Do For Loop For Counting Minimum 45 KM
$exampleCaseRunDistance = 0;
$exampleCaseRunTime = 0;
$exampleCaseRunCount = 0;

for ($i = 0; $i < count($exampleCaseArrayObject); $i++) {
  if ($exampleCaseRunDistance < 45) {
    $exampleCaseRunDistance += $exampleCaseArrayObject[$i]["distance"];
    $exampleCaseRunTime += $exampleCaseArrayObject[$i]["time"];
    $exampleCaseRunCount += 1;
  } else {
    break;
  }
}

// Echo / Logging
// echo "Distance" . " " . $exampleCaseRunDistance . " ";
// echo "Time" . " " . $exampleCaseRunTime . " ";
// echo "Average" . " " . $exampleCaseRunDistance / $exampleCaseRunTime * 60;
// echo "<br />";

// foreach ($exampleCaseArrayObject as $final) {
//   echo "Distance Time Interval" . " ";
//   echo $final["distance"] . " ";
//   echo $final["time"] . " ";
//   echo $final["interval"] . " ";
//   echo "<br />";
// }

// Create Array From Real Case
$realCaseArrayObject = [
  [
    "distance" => "14",
    "time" => "37",
  ],
  [
    "distance" => "10",
    "time" => "30",
  ],
  [
    "distance" => "15",
    "time" => "40",
  ],
  [
    "distance" => "20",
    "time" => "60",
  ],
  [
    "distance" => "8",
    "time" => "23",
  ],
  [
    "distance" => "18",
    "time" => "45",
  ],
  [
    "distance" => "17",
    "time" => "42",
  ],
  [
    "distance" => "13",
    "time" => "35",
  ],
  [
    "distance" => "12",
    "time" => "32",
  ],
  [
    "distance" => "16",
    "time" => "41",
  ],
];

// For Loop For Counting Interval Or Speed Average
for ($i = 0; $i < count($realCaseArrayObject); $i++) {
  $interval = $realCaseArrayObject[$i]["distance"] / $realCaseArrayObject[$i]["time"] * 60;
  $realCaseArrayObject[$i]["interval"] = $interval;
}

// Sorting By Descending
usort($realCaseArrayObject, fn ($a, $b) => $b['interval'] <=> $a['interval']);

// Create Variable And Do For Loop For Counting Minimum 45 KM
$realCaseRunDistance = 0;
$realCaseRunTime = 0;
$realCaseRunCount = 0;

for ($i = 0; $i < count($realCaseArrayObject); $i++) {
  if ($realCaseRunDistance < 45) {
    $realCaseRunDistance += $realCaseArrayObject[$i]["distance"];
    $realCaseRunTime += $realCaseArrayObject[$i]["time"];
    $realCaseRunCount += 1;
  } else {
    break;
  }
}

// Echo / Logging
// echo "Distance" . " " . $realCaseRunDistance . " ";
// echo "Time" . " " . $realCaseRunTime . " ";
// echo "Average" . " " . $realCaseRunDistance / $realCaseRunTime * 60;
// echo "<br />";

// foreach ($realCaseArrayObject as $final) {
//   echo "Distance Time Interval" . " ";
//   echo $final["distance"] . " ";
//   echo $final["time"] . " ";
//   echo $final["interval"] . " ";
//   echo "<br />";
// }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
  </head>
  <body>
    <div id="wrapper">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand">Kelvin Humata Indonesia</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div id="content-wrapper" class="d-flex flex-column">
        <div class="container">
          <div class="row mt-3">
            <div class="col-lg-12 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Logic Explanation (Bahasa Indonesia)</h6>
                </div>
                <div class="card-body">
                  <p class="card-text">1. Memasukkan Semua Data Ke Array Dan Menjalankan For Loop Untuk Menghitung Kecepatan.</p>
                  <p class="card-text">2. Melakukan Sorting Secara Descending.</p>
                  <p class="card-text">3. Melakukan Perhitungan Dari Atas Ke Bawah Hingga Minimal Jarak 45 KM.</p>
                  <p class="card-text">4. Menampilkan Hasil Dengan Echo Atau HTML.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-lg-6 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Example Case</h6>
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Distance</th>
                        <th scope="col">Time</th>
                        <th scope="col">Average Speed</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($exampleCaseArrayObject as $key => $value) : ?>
                      <tr>
                        <th><?= $key + 1 ?></th>
                        <td><?= $value["distance"] ?> KM</td>
                        <td><?= $value["time"] ?> Minutes</td>
                        <td><?= $value["interval"] ?> KM/Hour</td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Example Case Result (45 KM)</h6>
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Distance</th>
                        <th scope="col">Time</th>
                        <th scope="col">Average Speed</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php for ($i = 0; $i < $exampleCaseRunCount; $i++) : ?>
                      <tr>
                        <th><?= $i + 1 ?></th>
                        <td><?= $exampleCaseArrayObject[$i]["distance"] ?> KM</td>
                        <td><?= $exampleCaseArrayObject[$i]["time"] ?> Minutes</td>
                        <td><?= $exampleCaseArrayObject[$i]["interval"] ?> KM/Hour</td>
                      </tr>
                      <?php endfor; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Example Case Summary</h6>
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Description</th>
                        <th scope="col">Value / Answer</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Distance</td>
                        <td><?= $exampleCaseRunDistance ?> KM</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Time</td>
                        <td><?= $exampleCaseRunTime ?> Minutes</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Average</td>
                        <td><?= $exampleCaseRunDistance / $exampleCaseRunTime * 60 ?> KM/Hour</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Real Case</h6>
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Distance</th>
                        <th scope="col">Time</th>
                        <th scope="col">Average Speed</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($realCaseArrayObject as $key => $value) : ?>
                      <tr>
                        <th><?= $key + 1 ?></th>
                        <td><?= $value["distance"] ?> KM</td>
                        <td><?= $value["time"] ?> Minutes</td>
                        <td><?= $value["interval"] ?> KM/Hour</td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Real Case Result (45 KM)</h6>
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Distance</th>
                        <th scope="col">Time</th>
                        <th scope="col">Average Speed</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php for ($i = 0; $i < $realCaseRunCount; $i++) : ?>
                      <tr>
                        <th><?= $i + 1 ?></th>
                        <td><?= $realCaseArrayObject[$i]["distance"] ?> KM</td>
                        <td><?= $realCaseArrayObject[$i]["time"] ?> Minutes</td>
                        <td><?= $realCaseArrayObject[$i]["interval"] ?> KM/Hour</td>
                      </tr>
                      <?php endfor; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Real Case Summary</h6>
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Description</th>
                        <th scope="col">Value / Answer</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Distance</td>
                        <td><?= $realCaseRunDistance ?> KM</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Time</td>
                        <td><?= $realCaseRunTime ?> Minutes</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Average</td>
                        <td><?= $realCaseRunDistance / $realCaseRunTime * 60 ?> KM/Hour</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
